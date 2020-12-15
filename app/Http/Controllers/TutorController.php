<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Tutor\TutorContract;
use Sentinel;

class TutorController extends Controller
{
    protected $repo;
    public function __construct(TutorContract $tutorContract) {
        $this->repo = $tutorContract;
    }
    
    public function index()
    {
        $tutors = $this->repo->findAll();
        return view('tutor.index', compact('tutors'));
    }
    
    public function create()
    {
        return view('tutor.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'about'=>'required',
            'photo'=>'required',
            'phone'=>'required'
        ]);
        
        try{
            $tutor = $this->repo->create($request);
            if($tutor){
                return redirect()->route('tutor.index')->with('success', 'Tutor was created successfully');
            }else{
                return back()->with('error', 'failed to create tutor. Please try Again');
            }
        }catch(QueryException $e){
            return back()->with('error', $e->getMessage());
        }
    }
    
    public function show($id)
    {
        
    }
    
    public function edit($id)
    {
        $tutor = $this->repo->findById($id);
        return view('tutor.edit', compact('tutor'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'about'=>'required',
            'photo'=>'required',
            'phone'=>'required'
        ]);
        
        try{
            $tutor = $this->repo->update($request, $id);
            if($tutor){
                return redirect()->route('tutor.index')->with('success', 'Tutor was updated successfully');
            }else{
                return back()->with('error', 'failed to update tutor. Please try Again');
            }
        }catch(QueryException $e){
            return back()->with('error', $e->getMessage());
        }
    }
    
    public function delete($id)
    {
        //
    }
}
