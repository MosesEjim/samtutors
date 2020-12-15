<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Course\CourseContract;
use App\Repositories\Tutor\TutorContract;
use App\Repositories\Testimony\TestimonyContract;
use App\Repositories\Blog\BlogContract;

class LandingPageController extends Controller
{
    protected $courseRepo;
    protected $tutorRepo;
    protected $blogRepo;
    protected $testRepo;
    public function __construct(CourseContract $courseContract, TutorContract $tutorContract, TestimonyContract $testimonyContract, BlogContract $blogContract) {
        $this->courseRepo = $courseContract;
        $this->tutorRepo = $tutorContract;
        $this->testRepo = $testimonyContract;
        $this->blogRepo = $blogContract;
    }


    public function index(){
        $articles = $this->blogRepo->getFirstThree();
        $testimonies = $this->testRepo->getFirstThree();
        $tutors = $this->tutorRepo->getFirstThree();
        $courses = $this->courseRepo->getFirstThree();

        // dd($testimonies);
        return view('landing', compact('articles', 'testimonies', 'tutors', 'courses'));
    }
}
