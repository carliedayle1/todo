<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function about(){
        return view('about');
    }
    
    public function home(){
        $todos = Todo::latest()->get();
        
        return view('welcome', [
            'todos' => $todos,
        ]);
    }
    
    public function contact(){
        return view('contact');
    }
    public function create(){
        return view('create');
    }

    public function store(){

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
    public function destroy(Todo $todo){
        
        $todo->delete();
        return back();
    }
    public function edit(Todo $todo){
        return view('edit', [
            'todo' => $todo
        ]);
    }
    public function update(Todo $todo){
        request()->validate([
            'title' => 'required|min:3',
            'description' => 'required|min:5',
            'completed' => 'required'
        ]);
        
        $todo->update([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }
}
