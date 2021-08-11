<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class NewsController extends Controller
{
    public function index(){
        $posts = Post::whereIn('section', ['news', 'activities'])->with('user')->paginate(3);
        return view('news',[
            'posts' => $posts
        ]);
    }

    public function single($id){
        $post = Post::with('user')->findOrFail($id);
        return view('news-single',[
            'post' => $post
        ]);
    }
}
