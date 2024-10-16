<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
#activity 3 is done already
class TodosController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function contacts()
    {
        return view('contacts');
    }
    public function home()
    {
        return view('/');
    }
}
