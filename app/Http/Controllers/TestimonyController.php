<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Testimony\TestimonyContract;
use Sentinel;

class TestimonyController extends Controller
{
    protected $repo;
    public function __construct(TestimonyContract $testimonyContract) {
        $this->repo = $testimonyContract;
    }
    
    public function index()
    {
        $testimonies = $this->repo->findAll();
        return view('testimony.index', compact('testimonies'));
    }
    
    public function create()
    {
        return view('testimony.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'testifier'=>'required',
            'testimony'=>'required',
            'photo'=>'required'
        ]);
        
        try{
            $testimony = $this->repo->create($request);
            if($testimony){
                return redirect()->route('testimony.index')->with('success', 'Testmony was created successfully');
            }else{
                return back()->with('error', 'failed to created testimony. Please try Again');
            }
        }catch(QueryException $e){
            return back()->with('error', $e->getMessage());
        }
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        $testimony = $this->repo->findById($id);
        return view('testimony.edit', compact('testimony'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'testifier'=>'required',
            'testimony'=>'required',
        ]);
        
        try{
            $testimony = $this->repo->update($request, $id);
            if($testimony){
                return redirect()->route('testimony.index')->with('success', 'Testmony was updated successfully');
            }else{
                return back()->with('error', 'failed to update testimony. Please try Again');
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
