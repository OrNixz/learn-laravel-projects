<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', [
        // 'tasks' => Task::all()
        // 'tasks' => Task::latest()->get()
        'tasks' => Task::latest()->where('completed', true)->get()
    ]);
})->name('tasks.index');

Route::get('tasks/{id}', function ($id) {
    return view('show', [
        // 'task' => Task::find($id)
        'task' => Task::findOrFail($id)
    ]);
})->name('tasks.show');
