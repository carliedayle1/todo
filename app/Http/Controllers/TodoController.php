<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Log;
use App\Services\TodoService;

class TodoController extends Controller
{
    private readonly TodoService $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function welcome()
    {
        $todos = Todo::paginate(10);
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

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|min:4',
                'completed' => 'required|boolean',
            ]);

            $this->todoService->createTodoData($validated);

            return redirect()->route('welcome')->with('success', 'Todo created successfully!');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Failed to Store Data in Todo: ' . $ex->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $this->todoService->deleteTodoData($id);

            return redirect()->route('welcome')->with('success', 'Todo deleted successfully!');
        } catch (Exception $ex) {
            return redirect()->back()->with('error', 'Failed to Delete Data in Todo: ' . $ex->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        Log::info("Fetching Todo with ID: $id");

        if ($request->isMethod('get')) {
            $todo = $this->todoService->getTodoById($id);
            return view('edit', compact('todo'));
        }

        if ($request->isMethod('put')) {
            $validatedData = $request->validate([
                'title' => 'required|min:3',
                'description' => 'required|min:5',
                'completed' => 'required|boolean',
            ]);
            $this->todoService->handleTodoDataUpdate($validatedData, $id);

            return redirect()->route('welcome')->with('success', 'Todo updated successfully!');
        }
    }
}
