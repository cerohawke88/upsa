<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //

    public funtion upload(Request $request){
    	print_r($request->all());
    }
}

