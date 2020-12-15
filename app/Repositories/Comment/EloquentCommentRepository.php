<?php
namespace App\Repositories\Comment;
use App\Repositories\Comment\CommentContract;
use App\Models\Comment;
class EloquentCommentRepository implements CommentContract {
    public function create($request) {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->blog_id = $request->blogId;
        $comment->save();
        return $comment;
    }

      // return all Comment
    public function findAll() {
        return Comment::all();
    }

    public function getAll() {
        return Comment::latest()->paginate(3);
    }

      // return a Comment by ID
    public function findById($id) {
        return Comment::where('id', $id)->first();
    }

      // return a Comment by slug
    public function findBySlug($slug){
        return Comment::where('slug', $slug)->first();
    }

      // Update a Comment
    public function update($request, $slug) {
        
    }

      // Remove a Comment
    public function remove($slug) {
        
    }
}
