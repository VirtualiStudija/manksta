<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('pagrindinis', compact('posts'));
    }
    
     public function edit(Request $request, $id)
    {
        $post = Post::find($id);
        
        return view('postas', compact('post'));
    }
    
    public function store(Request $request)
    {
        $post = [
            'title' => $request['title'],
            'body' => $request['body']
        ];
        
        Post::create($post);
        
        return redirect()->back();
    }
    
     public function update(Request $request, $id)
    {
        $post = Post::find($id);
         
        $data = [
            'title' => $request['title'],
            'body' => $request['body']
        ];
        
        $post->update($data);
        
        return redirect('/');
    }
    
    public function delete($id)
    {
        $post = Post::find($id);
        
        $post->delete();
        
        return redirect('/');
    }
}
