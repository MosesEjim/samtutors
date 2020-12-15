<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Comment\CommentContract;
use Sentinel;

class CommentController extends Controller
{
    protected $repo;
    public function __construct(CommentContract $commentContract) {
        $this->repo = $commentContract;
    }
    
    public function index()
    {
        return view('comment.index');
    }
    
    public function create()
    {
        return view('comment.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'comment'=>'required',
            'blogId'=>'required'
        ]);

        $this->repo->create($request);
    }
    
    public function show($id)
    {
        //
    }
    
    public function edit($id)
    {
        //
    }
    
    public function update(Request $request, $id)
    {
        //
    }
    
    public function delete($id)
    {
        //
    }
}
