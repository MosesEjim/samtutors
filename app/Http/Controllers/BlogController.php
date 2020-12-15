<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Repositories\Blog\BlogContract;
use Sentinel;

class BlogController extends Controller
{
    protected $repo;
    public function __construct(BlogContract $blogContract) {
        $this->repo = $blogContract;
    }
    
    public function index()
    {
        $articles = $this->repo->findAll();
        return view('blog.index', compact('articles'));
    }
    public function all()
    {
        $articles = $this->repo->findAll();
        return view('blog', compact('articles'));
    }
    
    public function create()
    {
        return view('blog.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'body'=>'required',
            'photo'=>'required'
        ]);
        try{
            $post = $this->repo->create($request);
            if($post){
                return redirect()->route('post.index')->with(['success'=>'Post Successfully Created']);
            }
            else{
                return back()->with(['error'=>'Failed to create post']);
            }
        }catch(QueryException $e){
            return back()->with(['error'=>$e]);
        }
    }
    
    public function show($id)
    {
        $article = $this->repo->findBySlug($id);
        return view('blog.show')->with('article', $article);
    }
    
    public function edit($id)
    {
        $article = $this->repo->findBySlug($id);
        return view('blog.edit')->with('article', $article);
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'author'=>'required',
            'body'=>'required',
            'photo'=>'required'
        ]);
        try{
            $post = $this->repo->update($request, $id);
            if($post){
                return redirect()->route('post.index')->with(['success'=>'Post Successfully Updated']);
            }
            else{
                return back()->with(['error'=>'Failed to update post']);
            }
        }catch(QueryException $e){
            return back()->with(['error'=>$e]);
        }
    }
    
    public function delete($id)
    {
        $this->repo->remove($id);
        return back();
    }
}
