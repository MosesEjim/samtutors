<?php
namespace App\Repositories\Tutor;
use App\Repositories\Tutor\TutorContract;
use App\Models\Tutor;
class EloquentTutorRepository implements TutorContract {
    public function create($request) {
        $tutor = new Tutor();
        $tutor->name = $request->name;
        $tutor->about = $request->about;
        $tutor->phone = $request->phone;
        $path = $request->file('photo')->store('public/photos');
        $tutor->photo = explode('/', $path)[2];

        $tutor->facebook = $request->facebook;
        $tutor->linkedin = $request->linkedin;

        $tutor->save();
        return $tutor;
    }

      // return all Tutor
    public function findAll() {
        return Tutor::all();
    }

    public function getAll() {
        return Tutor::latest()->paginate(3);
    }

      // return a Tutor by ID
    public function findById($id) {
        return Tutor::where('id', $id)->first();
    }

      // return a Tutor by slug
    public function findBySlug($slug){
        return Tutor::where('slug', $slug)->first();
    }

      // Update a Tutor
    public function update($request, $slug) {
      $tutor = $this->findById($slug);
      $tutor->name = $request->name;
      $tutor->about = $request->about;
      $tutor->phone = $request->phone;
      
      if($request->filled('photo')){
        Storage::delete('public/photos//'.$tutor->photo);
        $path = $request->file('photo')->store('public/photos');
        $tutor->photo = explode('/', $path)[2];
      }
      

      $tutor->facebook = $request->facebook;
      $tutor->linkedin = $request->linkedin;

      $tutor->save();
      return $tutor;
    }

      // Remove a Tutor
    public function remove($slug) {
        
    }

    public function getFirstThree(){
      return Tutor::latest()->take(3)->get();
    }
}
