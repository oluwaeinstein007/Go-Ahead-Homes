<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function _construct(){
        $this->middleware(['auth']);
    }

    public function index(){
        $posts = Post::paginate(2);

        return view('posts',[
            'posts' => $posts
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|max:255',
            'descrip' => 'required',
            'section' => 'required',
            'picture' => 'nullable'
        ]);

        $request-> user()-> posts()-> create([
            'user_id' => auth() -> id(),
            'title' => $request -> title,
            'descrip' => $request -> descrip,
            'section' => $request -> section,
            'picture' => $request -> picture
        ]);

        return back();
    }
}
