<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function about(){
        return view('about');
    }

    public function showTodos()
    {
        $todos = Todo::all();

        return view('todo', compact('todos'));
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
