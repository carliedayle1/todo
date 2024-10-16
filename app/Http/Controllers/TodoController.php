<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function about(){
        return view('about');
    }
    
    public function home(){
        return view('welcome');
    }
    
    public function contact(){
        return view('contact');
    }
}
