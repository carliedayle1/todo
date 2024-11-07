<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function about(){
        return view('about');
    }
<<<<<<< HEAD

    public function welcome(){
        
        $todos = Todo::latest()->get();
=======
>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1

    public function home(){
        $todos = Todo::all();
        $todos = Todo::latest()->get();

        return view('welcome', [
            'todos' => $todos,
<<<<<<< HEAD
        ]);
    }

    public function contact(){
        return view('contact');
    }

=======
@@ -26,4 +26,37 @@ public function contact(){
>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1
    public function create(){
        return view('create');
    }

    public function store(){
<<<<<<< HEAD
=======

>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1
        Todo::create([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }  

    public function destroy(Todo $todo){
<<<<<<< HEAD
        
        $todo->delete();
        return back();
    }
=======

        $todo->delete();

        return back();
    }

>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1
    public function edit(Todo $todo){
        return view('edit', [
            'todo' => $todo
        ]);
    }
<<<<<<< HEAD
=======

>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1
    public function update(Todo $todo){
        $todo->update([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
<<<<<<< HEAD
=======

>>>>>>> 432c3ac6174731371685734994f89a16dd0482f1
        return redirect('/');
    }
}
