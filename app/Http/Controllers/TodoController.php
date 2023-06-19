<?php

namespace App\Http\Controllers;

use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return view('todo', [
            'value' => $todos
        ]);
    }

    public function create()
    {
        Todo::create(
            [
                'title' => 'Новая задача',
                'description' => 'Описание задачи…',
            ]
        );

        return redirect()->route('todo.index');

    }

    public function show(Todo $todo, $id)
    {
        $todos = $todo->find($id);

        return view('todo', [
            'value' => "$todos"
        ]);
    }

}
