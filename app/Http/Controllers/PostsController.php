<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index () {

      //$posts = Post::all();
      $posts = Post::latest()->get();
      //return $posts;
      return view ('blog.index', compact('posts'));
    }
    public function show (Post $post) {
      return view ('blog.show', compact('post'));
    }
    public function create () {
      return view ('blog.create');
    }
    public function store () {
      //dd(request()->all());
      
      //$post = new \App\post;

      $post = new Post;
      //Way No.One
      // $post->title = request('title');
      // $post->body = request('body');

      // $post->save();

      //Way No.Two
      //Post::create (request(['title' , 'body'] ));
       
      //Form Validate
      $this->validate(request(),[
        'title' => 'required',
        'body' => 'required'
      ]);

      Post::create ([
        'title' => request('title'),
        'body' => request('body')
      ]);


      return redirect ('/posts');
    }
}
