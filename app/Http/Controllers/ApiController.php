<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    //
    public function index(Request $request){
        $post=Post::all();
        
        return response($post,200);
    }//
    public function get_post(Request $request){
        $post=Post::find($request->post_id);
        if($post==null){
          return response(['message'=>'not found'],404);  
        }
        return response($post,200);

    }
         
}
