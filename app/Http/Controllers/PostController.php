<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
      //  $data['posts']=Post::get(); //get all posts

        $data['posts']=Post::orderBy('created_at','desc')->paginate(3); // means 2 per page

      //  dd($data['posts']);
       return view('post.index',$data);
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $request->user()->posts()->create([
            'body'=>$request->body
        ]);

        return back();
    
    }
}
