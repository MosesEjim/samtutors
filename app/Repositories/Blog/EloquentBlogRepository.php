<?php
namespace App\Repositories\Blog;
use App\Repositories\Blog\BlogContract;
use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class EloquentBlogRepository implements BlogContract {
    public function create($request) {
      $post = new Blog();
      $post->slug = Str::uuid();
      $post->title = $request->title;
      $post->author = $request->author;
      $post->body = $request->body; 
     
      $path = $request->file('photo')->store('public/photos');
    
      $post->photo = explode('/', $path)[2];
      
      $post->save();
      return $post;
    }

      // return all Blog
    public function findAll() {
        return Blog::all();
    }

    public function getAll() {
        return Blog::latest()->paginate(3);
    }

      // return a Blog by ID
    public function findById($id) {
        return Blog::where('id', $id)->first();
    }

      // return a Blog by slug
    public function findBySlug($slug){
        return Blog::where('slug', $slug)->first();
    }

      // Update a Blog
    public function update($request, $slug) {
      $post = $this->findBySlug($slug);
      $post->title = $request->title;
      $post->author = $request->author;
      $post->body = $request->body; 

      if($request->filled('photo')){
         Storage::delete('public/photos//'.$post->photo);
         $path = $request->file('photo')->store('public/photos');
         $post->photo = explode('/', $path)[2];
      }

      $post->save();
      return $post;
    }

      // Remove a Blog
    public function remove($slug) {
      $post = $this->findBySlug($slug);
      Storage::delete('public/photos//'.$post->photo);
      return $post->delete();
    }

    public function getFirstThree(){
      return Blog::latest()->take(3)->get();
    }
}
