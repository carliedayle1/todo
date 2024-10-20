<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function welcome()
    {
        return view('welcome');
        $todos = Todo::all();
       //dd($todos);
       return view('welcome', [
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

}