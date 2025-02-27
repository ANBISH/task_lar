<?php

namespace App\Services;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class TaskFilterSearchService
{
    public function getCompletedTasks($slug, $isCompleted)
    {
        return Category::whereActive(1)
            ->whereTranslation('slug', $slug)
            ->with(['tasks' => function ($query) use ($isCompleted) {
                $query->where('user_id', Auth::id())
                    ->where('is_completed', $isCompleted)
                    ->with('priority');
            }])
            ->firstOrFail()
            ->tasks;
    }

    public function filterTasks($slug, $isCompleted)
    {
        return Category::whereTranslation('slug', $slug)
            ->firstOrFail()
            ->tasks()
            ->where('user_id', Auth::id())
            ->where('is_completed', $isCompleted)
            ->with('priority')
            ->get();
    }

    public function searchTasks($slug, $isCompleted, $searchTerm)
    {
        return Category::whereActive(1)
            ->whereTranslation('slug', $slug)
            ->with(['tasks' => function ($query) use ($isCompleted, $searchTerm) {
                $query->where('user_id', Auth::id())
                    ->where('is_completed', $isCompleted)
                    ->when($searchTerm, function ($query, $searchTerm) {
                        $query->where('title', 'LIKE', "%{$searchTerm}%");
                    })
                    ->with('priority');
            }])
            ->firstOrFail()
            ->tasks;
    }
}
