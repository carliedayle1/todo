<?php
namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;
class TodoController extends Controller
{
    public function about(){
        return view('about');
    }
    public function welcome(){
        $name = "Hello World!";
        
        $todos = Todo::all();
        //dd($todos);
        return view('welcome', [
            'name' => $name,
            'todos' => $todos,
        ]);
    }
    public function contact(){
        return view('contact');
    }
}