<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function index()
    {

        return view('tasks.index', ['tasks' => Task::orderBy('id', 'asc')->get()]);
    }

    public function create()
    {

    }


    public function store(Request $request)
    {
        $request->validate([
            'list' => 'required'
        ]);
        $list = strtolower($request->list);
        $task = Task::create([
            'list' => $list
        ]);

        return back();
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }



    public function update(Request $request, Task $task)
    {

        $task->list = $request->list;
        $task->mark = false;
        $task->save();
        return redirect()->route('tasks.index');
    }


    public function destroy(Task $task)
    {
        $task->delete();
        return back();
    }


    public function show()
    {

    }
}
