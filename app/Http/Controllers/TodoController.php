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

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
        
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'required|boolean',
        ]);

        // Create a new Todo instance and fill it with the request data
        Todo::create([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);

        // Redirect back to the welcome page with a success message
        return redirect()->route('welcome')->with('success', 'Todo created successfully!');
    }

    public function destroy($id)
{
    // Find the Todo by its ID and delete it
    $todo = Todo::findOrFail($id);
    $todo->delete();

    // Redirect back to the welcome page with a success message
    return redirect()->route('welcome')->with('success', 'Todo deleted successfully!');
}
}
