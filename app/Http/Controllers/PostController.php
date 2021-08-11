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
        $posts = Post::with('user')->paginate(3);

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

        $file = $request->picture;
        
        $image_name = md5(time().uniqid()).".".$request->picture->extension();
        $path = $request->picture->move(public_path('uploads'), $image_name);

        $request-> user()-> posts()-> create([
            'user_id' => auth() -> id(),
            'title' => $request -> title,
            'descrip' => $request -> descrip,
            'section' => $request -> section,
            'picture' =>'uploads/'.$image_name
        ]);

        

        return back();
    }

    public function destroy(Post $post){
            $post->delete();
            return back();

    }
}
