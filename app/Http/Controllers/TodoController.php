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
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'completed' => 'required|boolean',
        ]);

        $this->todoService->createTodoData($validated);

        return redirect()->route('welcome')->with('success', 'Todo created successfully!');
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();

        return redirect()->route('welcome')->with('success', 'Todo deleted successfully!');
    }

    public function update(Request $request, $id)
    {
        Log::info("Fetching Todo with ID: $id");
        $todo = Todo::findOrFail($id);

        if ($request->isMethod('get')) {
            return view('edit', compact('todo'));
        }

        if ($request->isMethod('put')) {
            $request->validate([
                'title' => 'required|max:255',
                'description' => 'nullable',
                'completed' => 'required|boolean',
            ]);
    
            $todo->update([
                'title' => $request->title,
                'description' => $request->description,
                'completed' => $request->completed,
            ]);
    
            return redirect()->route('welcome')->with('success', 'Todo updated successfully!'); // Ensure this route name matches your routes file
        }
    }
}
