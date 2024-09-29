<?php

namespace App\Http\Controllers;

use App\Services\TodoService;
use Exception;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    private readonly TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function getTodoId ($id) {
        try {
            $todo = $this->todoService->getTodoById($id);

            return response()->json([
                'isError' => false,
                'message' => 'Success',
                'data' => $todo
            ]);
        }
        catch(Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }

    public function index () {
        try {
            $todo = $this->todoService->getAllTodo();

            return response()->json([
                'isError' => false,
                'message' => 'Success',
                'data' => $todo
            ]);
        }
        catch (Exception $ex) {
            return response()->json(['message' => $ex->getMessage()]);
        }
    }
}
