<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\posts;

class postController extends Controller
{
    public function getAllPosts(request $request)
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function savePost(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'description' => $request->description
        ]);
        return back()->with('post_created', 'Post has been created successfully');
    }
}