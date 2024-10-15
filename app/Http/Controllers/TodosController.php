<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

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
}
