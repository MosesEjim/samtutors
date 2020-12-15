<?php
namespace App\Repositories\Testimony;
use App\Repositories\Testimony\TestimonyContract;
use App\Models\Testimony;
class EloquentTestimonyRepository implements TestimonyContract {
    public function create($request) {
        $testimony = new Testimony();
        $testimony->testifier = $request->testifier;
        $testimony->testimony = $request->testimony;
        
        $path = $request->file('photo')->store('public/photos');
    
        $testimony->photo = explode('/', $path)[2];
        $testimony->save();
        return $testimony;
    }

      // return all Testimony
    public function findAll() {
        return Testimony::all();
    }

    public function getAll() {
        return Testimony::latest()->paginate(3);
    }

      // return a Testimony by ID
    public function findById($id) {
        return Testimony::where('id', $id)->first();
    }

      // return a Testimony by slug
    public function findBySlug($slug){
        return Testimony::where('slug', $slug)->first();
    }

      // Update a Testimony
    public function update($request, $slug) {
      $testimony = $this->findById($slug);
      $testimony->testifier = $request->testifier;
      $testimony->testimony = $request->testimony;
      
      if($request->filled('poto')){
         Storage::delete('public/photos//'.$testimony->photo);
         $path = $request->file('photo')->store('public/photos');
         $testimony->photo = explode('/', $path)[2];
      }

      $testimony->save();
      return $testimony;
    }

      // Remove a Testimony
    public function remove($slug) {
        
    }

    public function getFirstThree(){
      return Testimony::latest()->take(6)->get();
    }
}
