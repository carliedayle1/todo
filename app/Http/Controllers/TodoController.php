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
        $todos = Todo::all();
        $todos = Todo::latest()->get();

        return view('welcome', [
            'todos' => $todos,
@@ -26,4 +26,37 @@ public function contact(){
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
