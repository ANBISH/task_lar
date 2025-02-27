<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Priority;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TaskService
{
    public function getTasksByCategorySlug($slug, $isCompleted = 0)
    {
        $userId = Auth::id();

        return Category::whereActive(1)
            ->whereTranslation('slug', $slug)
            ->with(['tasks' => function ($query) use ($userId, $isCompleted) {
                $query->where('user_id', $userId)
                    ->where('is_completed', $isCompleted)
                    ->with('priority');
            }])
            ->firstOrFail()
            ->tasks;
    }

    public function createTask(array $data, $slug)
    {
        $userId = Auth::id();
        $categoryId = Category::whereTranslation('slug', $slug)->firstOrFail()->id;

        $newSlug = Str::slug($data['title']);

        if (Task::where('slug', $newSlug)->exists()) {
            $newSlug = $this->makeUniqueSlug($newSlug);
        }

        return Task::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'due_date' => $data['due_date'],
            'priority_id' => $data['priority_id'],
            'slug' => $newSlug,
            'user_id' => $userId,
            'category_id' => $categoryId,
        ]);
    }

    public function updateTask($task, array $data)
    {
        if ($data['title'] != $task->title) {
            $newSlug = Str::slug($data['title']);
            if (Task::where('slug', $newSlug)->exists()) {
                $newSlug = $this->makeUniqueSlug($newSlug);
            }
            $task->slug = $newSlug;
        }
        $task->update($data);
    }

    public function updateTaskStatus(Task $task, $status)
    {
        $task->update(['is_completed' => $status]);
    }

    private function makeUniqueSlug($slug)
    {
        $originalSlug = $slug;
        $count = 1;
        while (Task::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count;
            $count++;
        }
        return $slug;
    }
}
