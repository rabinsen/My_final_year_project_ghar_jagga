<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public function show(){
    	$name = [];
    	$name['first'] = 'Rabin <span style = "color:red;"> Senchuri</span>';
    	$name['second'] = 'shyam';
    	
    	return view('page.hello', $name);
    }
}
