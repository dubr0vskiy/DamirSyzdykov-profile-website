<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class SendingController extends Controller
{
    public function index(){
        $post=Post::all();

        return view('sending.index')->with(['post'=>$post]);
        return view('sending.file_opload');
    }
    public function showUploadFile(Request $request){
        $file=$request->file('image');
        //Display File Name
        echo 'File Name: '.$file->getClientOriginaleName();
        echo '<br>';

        //Display File Extension
        echo 'File Extension'.$file->
            getClientOriginalExtension();
        echo '<br>';
        
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';

        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';

        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();

        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->
            getClientOriginalName());
    
    }

    public function store(Request $request){
        Post::create([
            'Name'=> $request->Name,
            'Surname'=> $request->Surname,
            'Email'=> $request->Email        
        ]);
        return back();
    }

    
}
