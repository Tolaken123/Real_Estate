<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class FileUpload extends Controller
{
    public function createForm(){
        return view('image.form');
      }
    
      public function fileUpload(Request $req){
        $req->validate([
          'files' => 'required',
          'files.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);
        if($req->hasfile('files')) {
            foreach($req->file('files') as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move(public_path().'/uploads/', $name);  
                $files[] =$name;  
            }
            $fileModal = new Image();
            $fileModal->files= json_encode($files[]);
            // dd($fileModal);
           return back()->with('success', 'File has successfully uploaded!');
        }
      }
}
