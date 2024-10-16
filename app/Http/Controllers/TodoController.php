<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
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
}
