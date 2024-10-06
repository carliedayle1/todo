<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function welcome(){
        return view('welcome');
    }
}
