<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Exception;
use App\Services\TodoService;

class TodoController extends Controller
{
    private readonly TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function showTodos()
    {
        // Get all todos
        $todos = Todo::all();

        // Return the todo view with todos data
        return view('todo', compact('todos'));
    }

    public function getTodoId($id)
    {
        try {
            $todo = $this->todoService->getTodoById($id);

            return response()->json([
                'isError' => false,
                'message' => 'Success',
                'data' => $todo
            ]);
        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }

    public function index()
    {
        try {
            $todo = $this->todoService->getAllTodo();

            return response()->json([
                'isError' => false,
                'message' => 'Success',
                'data' => $todo
            ]);
        } catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }
}
