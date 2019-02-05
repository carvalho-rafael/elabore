<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use PhpParser\Node\Stmt\Return_;
use Purifier;

class PostController extends Controller
{

    private $post;

    public function __construct() {
        $this->post = new Post;
        
    }

    public function index()
    {
        $posts = $this->post->all();
        return view('Panel/posts', compact('posts'));
    }

    public function create()
    {
        return view('Panel/create_edit_post');
    }

    public function store(Request $request)
    {
        $this->post->title = $request->title;
        $this->post->subtitle = $request->subtitle;
        $this->post->author = $request->author;
        $this->post->content = $request->content;
        $save = $this->post->save();
        if($save)
            return redirect('/painel/posts');
        else
            return redirect()->back();
        
    }

    public function show($id)
    {
        $post = $this->post->find($id);
        return view('Panel/show', compact('post'));
    }

    public function edit($id)
    {
        $post = $this->post->find($id);
        return view('Panel/create_edit_post', compact('post'));
    }


    public function update(Request $request, $id)
    {
        $edited = $this->post->find($id);
        $edited->title = $request->title;
        $edited->subtitle = $request->subtitle;
        $edited->author = $request->author;
        $edited->content = $request->content;
        $save = $edited->save(); 
        if($save)
            return redirect('/painel/posts');
        else
            return redirect()->back();
    }


    public function destroy($id)
    {
        $post = $this->post->find($id);
        $delete = $post->delete();
        if($delete)
            return redirect('/painel/posts');
        else
            return "Erro ao deletar";
    }
}