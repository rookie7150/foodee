<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function store(Request $request){

        $post = Post::create($request->all());
        return response()->json($post, 201);

    }

    public function index(){
        $posts = Post::with('user')->get();
        return response()->json($posts);
    }

}
