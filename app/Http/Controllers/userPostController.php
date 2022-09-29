<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\userPost;

class userPostController extends Controller
{
    //
    public function addPost()
    {
        return view('user_post');
    }

    public function saveAddPost(Request $request)
    {
        $post = new userPost;
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        return back()->with('post _created', 'post successfully added');
    }

    public function getPosts()
    {
        $posts = userPost::orderBy('id', 'DESC')->get();
        return view('view_post', compact('posts'));
    }

    public function getPostById($id)

    {

        $post = userPost::find($id);
        return view('single-post', compact('post'));
    }
}

// orderBy('id', 'DESC')->get()