<?php
namespace App\Repositories\Course;
use App\Repositories\Course\CourseContract;
use App\Models\Course;
class EloquentCourseRepository implements CourseContract {
    public function create($request) {
      $course = new Course();
      $course->name = $request->name;
      $course->body = $request->body; 
      $course->tutor_id = $request->tutor;
      $path = $request->file('photo')->store('public/photos');
    
      $course->photo = explode('/', $path)[2];
      
      $course->save();
      return $course;
    }

      // return all Course
    public function findAll() {
        return Course::all();
    }

    public function getAll() {
        return Course::latest()->paginate(3);
    }

      // return a Course by ID
    public function findById($id) {
        return Course::where('id', $id)->first();
    }

      // return a Course by slug
    public function findBySlug($slug){
        return Course::where('slug', $slug)->first();
    }

      // Update a Course
    public function update($request, $slug) {
      $course = $this->findById($slug);
      $course->name = $request->name;
      $course->body = $request->body; 

      if($request->filled('poto')){
         Storage::delete('public/photos//'.$course->photo);
         $path = $request->file('photo')->store('public/photos');
         $course->photo = explode('/', $path)[2];
      }

      $course->save();
      return $course;
    }

      // Remove a Course
    public function remove($slug) {
        
    }

    public function getFirstThree(){
      return Course::latest()->take(3)->get();
    }
}
