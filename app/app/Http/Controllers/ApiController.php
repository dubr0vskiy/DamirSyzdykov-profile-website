<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class ApiController extends Controller
{
    /*
        Эта функция возвращает все строки Post
    */
    public function index(Request $request){
        $post=Post::all();

        return response($post,200);
    }
    /*
        Эта функция возвращает post с id
    */
    public function get_post(Request $request){
        $post=Post::find($request->post_id);

        if ($post==null){
            return response(['message'=> 'There is no post'], 404);
        }
        return response($post,200);
    }
}
