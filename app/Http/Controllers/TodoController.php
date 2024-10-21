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

        
        return view('home', [
            'todos' => $todos,
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function createtodo()
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
