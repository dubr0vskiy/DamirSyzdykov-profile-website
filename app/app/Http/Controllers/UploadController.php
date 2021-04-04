<?php

namespace App\Http\Controllers;
use App\Post;
use App\ItemDetails;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm()
    {
        return view('uploadForm');
    }
    public function uploadSubmit(Request $request)
    {
        $this->validate($request, [
            'Name'=>'required',
            'Surname'=>'required',
            'Email'=>'required',
        ]);
        if($request->hasFile('photos')){
            $allowedfileExtension=['pdf','jpg','png','docx'];
            $files=$request->file('photos');
            foreach($files as $file){
                $filename=$file->getClientOriginalName();
                $extension=$file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
                if($check){
                    $post=Post::create($request->all());
                    foreach($request->photos as $photo){
                        $filename=$photo->store('photos');
                        ItemDetails:create([
                            'item_id'=>$post->id,
                            'filename'=>$filename
                        ]);
                    }
                    echo "Upload Successfully";
                }
                else{
                    echo '<div class="alert alert-warnin"><strong>
                    Warning!</strong>Sorry Only Upload png,jpg,doc</div';
                }
            }
        }
    }
}
