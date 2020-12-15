<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Course\CourseContract;
use App\Repositories\Tutor\TutorContract;
use Sentinel;

class CourseController extends Controller
{
    protected $repo;
    protected $tutorRepo;
    public function __construct(CourseContract $courseContract, TutorContract $tutorContract) {
        $this->repo = $courseContract;
        $this->tutorRepo = $tutorContract;
    }
    
    public function index()
    {
        $courses = $this->repo->getAll();
        return view('course.index', compact('courses'));
    }
    
    public function create()
    {
        $tutors = $this->tutorRepo->findAll();
        return view('course.create', compact('tutors'));
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'photo'=>'required',
            'tutor'=>'required',
            'body'=>'required'
        ]);

        try{
            $course = $this->repo->create($request);
            if($course){
                return redirect()->route('course.index');
            }else{
                return back()->with('error','Failed to create course. Try again');
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
        $course = $this->repo->findById($id);
        return view('course.edit', compact('course'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|string',
            'photo'=>'required',
            'tutor'=>'required',
            'body'=>'required'
        ]);

        try{
            $course = $this->repo->update($request, $id);
            if($course){
                return redirect()->route('course.index');
            }else{
                return back()->with('error','Failed to update course. Try again');
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
