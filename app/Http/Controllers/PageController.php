<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;

class PageController extends Controller
{
    public function showIndex(){
	    $slider = File::files(public_path('/slider/'));
	    return view('index', ['slider' => $slider]);
    }

    public function showContact(){
	    return view('kapcsolat');
    }

    public function showCamps(){
	return view('taborok');
    }
}
