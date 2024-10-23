<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
    public function home()
    {
        $todos = Todo::all();

        
        return view('home', [
            'todos' => $todos,
        ]);
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function createtodo()
    {
        return view('createtodo');
    }
}