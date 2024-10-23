<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo

class todocontroller extends Controller
{
    public function about(){
        return view('about');
    }
    
    public function home(){
        $todos = Todo::all();
        
        return view('welcome', [
            'todos' => $todos,
        ]);
    }
    
    public function contact(){
        return view('contact');
    }
    public function create(){
        return view('create');
    }
}