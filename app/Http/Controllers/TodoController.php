<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class Todocontroller extends Controller
{
     public function welcome()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}