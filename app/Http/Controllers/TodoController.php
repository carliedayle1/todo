<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        // Fetch all todos from the database
        $todos = Todo::all();

        // Pass the todos to the view
        return view('todos.index', compact('todos'));
    }
}
