<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function about()
    {
        return view('about');
    }
    public function home()
    {
        $todos = Todo::all();
@@ -16,10 +20,6 @@
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
@@ -28,4 +28,41 @@
    {
        return view('createtodo');
    }
    public function store()
    {
 
        Todo::create([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
    return redirect('/');
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back();
    }
    public function edit(Todo $todo){
        //dd($todo);
        return view('edit',[
            'todo' => $todo
        ]);
    }
    public function update(Todo $todo)
    {
        //dd(request()->all());
        $todo->update([
            'title' => request()->title,
            'description' => request()->description,
            'completed' => request()->completed == 'Yes' ? true : false
        ]);
        return redirect('/');
    }
}