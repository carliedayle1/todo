<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function welcome()
    {
        $todos = Todo::all();
       //dd($todos);
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

    public function store()
    {
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'completed' => 'required'
        ]);

        Todo::create([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }  

    public function destroy(Todo $todos)
    {
        
        $todos->delete();

        return back();
    }

    public function edit(Todo $todos)
    {
        return view('edit', [
            'todos' => $todos
        ]);
    }

    public function update(Todo $todos)
    {
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'completed' => 'required'
        ]);

        $todos->update([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }

    
}
