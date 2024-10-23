<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function home()
    {
        $todos = Todo::all();

        
        return view('home', [
            'todos' => $todos,
        ]);
    }

    public function about(){
        return view('about');
    }

    public function welcome(){
        
        $todos = Todo::all();

        //dd($todos);
        return view('welcome', [
            'todos' => $todos,
        ]);
    }

    public function contact(){
        return view('contacts');
    }

    public function create(){

        return view('create');
    }

    public function store(){
        
        dd(request()->all());
    }

}