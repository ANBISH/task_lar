<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;


class TaskController extends Controller
{

    public function lists($slug)
    {
        $userId = Auth::id();

        $tasks = Category::whereActive(1)
            ->whereTranslation('slug', $slug)
            ->with(['tasks' => function ($query) use ($userId) {
                $query->where('user_id', $userId)
                    ->with('priority');
            }])
            ->firstOrFail()
            ->tasks;

        return view('layouts.task.category', compact('tasks'));
    }

    public function edit($slug)
    {

        $task = Task::where('slug', $slug)->with('priority')->firstOrFail();

        $priority = Priority::all();

        $category_slug = Category::where('id', $task->category_id)
            ->first()
            ->slug;

        return view('layouts.task.form', compact('task', 'priority', 'category_slug'));
    }

    public function update(TaskRequest $request, $id, $slug)
    {
        $task = Task::where('id', $id)->firstOrFail();

        // if ($task->user_id !== Auth::id()) {
        //     abort(403, 'This action is unauthorized.');
        // }
        dd($task);

        return redirect()->route('tasks.list', ['slug' => $slug])->with('success', 'Завдання успішно оновлено!');
    }
}
