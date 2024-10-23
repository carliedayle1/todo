<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function welcome()
    {
        $todos = Todo::all();
        return view('welcome', [
            'todos' => $todos,
        ]);
    }

    // About page
    public function about()
    {
        return view('about');
    }

    // Contact page
    public function contact()
    {
        return view('contact');
    }

    // Create Todo page
    public function create()
    {
        return view('create');
    }

    // Store new Todo
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'completed' => 'required|boolean',
        ]);

        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);

        return redirect()->route('welcome')->with('success', 'Todo created successfully!');
    }



    public function delete($id)
    {
        // Find the todo item by its ID
        $todo = Todo::findOrFail($id);
        
        // Delete the todo item
        $todo->delete();
        
        // Redirect back to the index with a success message
        return redirect()->route('welcome')->with('success', 'Todo deleted successfully!');
    }
}