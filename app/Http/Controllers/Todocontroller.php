<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class Todocontroller extends Controller
{



    public function welcome()
    {
        $todos = Todo::all();
        return view('welcome', [
            'todos' => $todos,
        ]);
    }

 
// no idea why but it works ig ¯\_(ツ)_/¯
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

        //  return redirect()->route('todo.welcome'); // Assuming the 'index' displays all todos
     }

    //  public function edit(Todo $todo){

        
    //     return view('edit',[
    //         'todo' => $todo
    //     ]);
    // }

    // Show the edit form
    // public function edit($id)
    // {
    //     $todo = Todo::findOrFail($id);
    //     return view('todos.edit', compact('todo'));
    // }

   
    

    public function delete($id)
    {
        // Find the todo item by its ID
        $todo = Todo::findOrFail($id);
        
        // Delete the todo item
        $todo->delete();
        
        // Redirect back to the index with a success message
        return redirect()->route('welcome')->with('success', 'Todo created successfully!');

    }

  
}
