<?php

namespace App\Services;

use App\Models\Todo;

class TodoService
{
    public function getTodoById($id)
    {
        return Todo::findOrFail($id);
    }

    public function getAllTodo()
    {
        return Todo::all();
    }

    public function createTodoData($data)
    {
        return Todo::create($data);
    }

    public function deleteTodoData ($id) {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return $todo;
    }

    public function handleTodoDataUpdate (array $validateTodoData, $id) 
    {
        $todo = Todo::findOrFail($id);
        $todo->update($validateTodoData);
        return $todo;
    }
}
