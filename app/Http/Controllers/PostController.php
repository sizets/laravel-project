<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Post;


class PostController extends Controller
{
     
    public function save(Request $request){
        $data = [
            

            
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
          
            
            
            

        ];
        $post = Post::create($data);
        return redirect()->route('post.view');
       
        
    }

    public function view()
    {
        
        $posts=Post::all();

        return view('community',compact('posts'));
       
    }
  
    
}
