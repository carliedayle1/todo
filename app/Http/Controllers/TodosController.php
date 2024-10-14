<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todos;


class TodosController extends Controller
{
    public function about() 
    {
        return view('about');
    }

    public function contacts()
    {
        return view('contact');
    }
    public function home()
    {
        return view('welcome');

    }
}
