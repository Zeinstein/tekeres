<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact as Contact;

class FormController extends Controller
{
    public function contactForm(Request $request){
	    $request = $request->all();
	    $from = $request['email'];
	    $name = $request['name'];
	    $message = $request['message'];
	    $phone = $request['phone'];

	    #Contact::build($from, $name, $message, $phone);
	    #innentől a gmaillel is kell kicsit játszani még
	    #pop up modal!
	    return redirect()->route('contact');
    }
}
