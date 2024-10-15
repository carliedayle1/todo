<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
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
        return view('contact');
    }

    public function create(){
        return view('create');
    }

}
