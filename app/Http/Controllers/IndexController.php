<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class IndexController extends Controller
{
    public function show(){
	    $slider = File::files(public_path('/slider/'));
	    return view('index', ['slider' => $slider]);
    }
}
