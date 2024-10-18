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

    public function editOrUpdate(Request $request, $id)
{
    \Log::info("Fetching Todo with ID: $id");
    // Fetch the todo item based on the id
    $todo = Todo::findOrFail($id);

    // If the request is GET, show the edit form
    if ($request->isMethod('get')) {
        return view('edit', compact('todo'));
    }

    // If the request is POST, update the todo item
    if ($request->isMethod('put')) {
        $request->validate([
            'title' => 'required|max:255',
            'description' => 'nullable',
            'completed' => 'required|boolean',
        ]);

        // Update the todo item
        $todo->update([
            'title' => $request->title,
            'description' => $request->description,
            'completed' => $request->completed,
        ]);

        return redirect()->route('welcome')->with('success', 'Todo updated successfully!');
    }
}
}
