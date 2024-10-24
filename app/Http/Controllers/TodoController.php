<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function welcome()
    {
        $todos = Todo::all();

        return view('welcome', ['todos' => $todos,]); 
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
