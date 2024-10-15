<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function about(){
        return view('about');
    }
    public function welcome(){
        $name = "Hello World!";
        return view('welcome', [
            'name' => $name,
        ]);
    }
    public function contact(){
        return view('contact');
    }
}
