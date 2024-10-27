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
         return redirect()->route('welcome')->with('created', 'Todo created successfully!');

     }
     public function update(Request $request, $id)
     {
         $request->validate([
             'title' => 'required|string|max:255',
             'description' => 'nullable|string',
         ]);
     
         $todo = Todo::findOrFail($id);
         $todo->title = $request->input('title');
         $todo->description = $request->input('description');
         $todo->completed = $request->has('completed');
         $todo->save();
     
         return redirect()->route('welcome')->with('success', 'Todo updated successfully');
     }
     
     public function edit($id)
{
   
    $todo = Todo::findOrFail($id);
    return view('edit', compact('todo'));
}


   
    

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
