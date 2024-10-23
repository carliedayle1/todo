<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //display them in a table
    public function welcome()
    {
        $todos = Todo::all();  
        return view('welcome', ['todos' => $todos]); 
    }

    
    public function create()
    {
        return view('create');  
    }

    
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'title' => 'required|max:255', 
            'description' => 'nullable',  
        ]);

        
        Todo::create([
            'title' => $validated['title'],  
            'description' => $validated['description'],  
        ]);

        
        return redirect()->route('welcome');  
    }
}
