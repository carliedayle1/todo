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
}
