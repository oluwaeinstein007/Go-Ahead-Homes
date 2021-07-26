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
        $posts = Post::paginate(3);

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
        $path="";
         $img_data=str_replace(' ','+',$file);
        // $video_data =str_replace('data:video/mp4;base64,', '',$file );

        $decoded= base64_decode($img_data);
        $path = md5(time().uniqid()).".jpg";
        file_put_contents('uploads/'.$path, $decoded);

        $request-> user()-> posts()-> create([
            'user_id' => auth() -> id(),
            'title' => $request -> title,
            'descrip' => $request -> descrip,
            'section' => $request -> section,
            'picture' =>'uploads/'.$path
        ]);

        

        return back();
    }

    public function destroy(Post $post){
            $post->delete();
            return back();

    }
}
