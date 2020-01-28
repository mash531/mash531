<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){

    	return view('upload');
    
    
    }
 
    public function upload(Request $request){

        $file_name = $request->file('file');
        // $request->file('file')->storeAs('',$file_name);
    	$path = $request->file('upload_file')->store('public');
    	
    	// DBにファイル名とpathをほぞん
    	\App\FileUpload::create([
    	   'image_path' => $path,
    	   'user_id' => \Auth::id(),
    	]);
    	
        return redirect()->route('home');
    }
    
   
}