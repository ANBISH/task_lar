<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterTasksRequest;
use App\Http\Requests\TaskRequest;
use App\Models\Category;
use App\Models\Priority;
use App\Models\Task;
use App\Services\TaskFilterSearchService;
use App\Services\TaskService;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    protected $taskService;
    protected $taskFilterSearchService;

    public function __construct(TaskService $taskService, TaskFilterSearchService $taskFilterSearchService)
    {
        $this->taskService = $taskService;
        $this->taskFilterSearchService = $taskFilterSearchService;
    }

    public function lists($slug)
    {
        $category_slug = $slug;

        $tasks = $this->taskService->getTasksByCategorySlug($slug);

        return view('layouts.task.category', compact('tasks', 'category_slug'));
    }

    public function store(TaskRequest $request, $slug)
    {
        $this->taskService->createTask($request->validated(), $slug);

        return redirect()->route('tasks.list', ['slug' => $slug])->with('success', 'Завдання успішно додано!');
    }

    public function create($slug)
    {
        $priority = Priority::all();

        $category_slug = $slug;

        return view('layouts.task.form_create', compact('priority', 'category_slug'));
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
        $task = Task::findOrFail($id);

        $this->taskService->updateTask($task, $request->validated());

        return redirect()->route('tasks.list', ['slug' => $slug])->with('success', 'Завдання успішно оновлено!');
    }

    public function updateStatus(FilterTasksRequest $request, Task $task)
    {
        $this->taskService->updateTaskStatus($task, $request->is_completed);

        return response()->json(['success' => true]);
    }

    public function completedTasks($slug, $isCompleted)
    {
        $tasks = $this->taskFilterSearchService->getCompletedTasks($slug, $isCompleted);

        return view('layouts.task.table.task_table', compact('tasks'))->render();
    }

    public function filterTasks(FilterTasksRequest $request, $slug)
    {
        $tasks = $this->taskFilterSearchService->filterTasks($slug, $request->query('is_completed'));

        return view('layouts.task.table.task_table', compact('tasks'))->render();
    }

    public function search(Request $request)
    {
        $tasks = $this->taskFilterSearchService->searchTasks(
            $request->input('slug'),
            $request->input('filter'),
            $request->input('search')
        );

        return view('layouts.task.table.task_table', compact('tasks'))->render();
    }
}
