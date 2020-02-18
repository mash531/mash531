<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function index(){
    $file_name = $request->file('file');

// $request->file('file')->store('public[image]');

}
      
    }

