<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;

class UploadController extends Controller
{
    public function index(){

    	return view('upload');
    
    
    }
 
    public function upload(Request $request){

        // $file_name = $request->file()["upload_file"];
        $file_name = $request->file()["upload_file"]->getClientOriginalName();

        // $file = $request->file();

        // $target =  $file->getClientOriginalName();

        // ddd($file_name);
    	$path = $request->file('upload_file')->storeAs('home/ubuntu/environment/project01/storage/',$file_name);
    	
    	// DBにファイル名とpathをほぞん
    	\App\FileUpload::create([
    	   'image_path' => $path,
    	   'file_name' => $file_name,
    	   'user_id' => \Auth::id(),
    	]);
    // 	dd($path);
    // ddd($file_name);
        return redirect()->route('home',$file_name);
    }
    
   
}