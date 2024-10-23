<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function about(){
        return view('about');
    }

    public function welcome(){
        
        $todos = Todo::latest()->get();

        //dd($todos);
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
        $todo->update([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }

}
