<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TaskRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TaskCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TaskCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Task::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/task');
        CRUD::setEntityNameStrings('таску', 'Таски');
    }

    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name' => 'title',
            'label' => "Назва",
            'searchLogic' => function ($query, $column, $searchTerm) {
                $query->whereTranslationLike('title', '%' . $searchTerm . '%');
            }
        ]);

        CRUD::addColumn([
            'name' => 'is_completed',
            'label' => "Виконання",
            'type' => 'checkbox',
        ]);

        CRUD::addColumn([
            'name' => 'due_date',
            'label' => "Термін виконання",
            'type' => 'date',
        ]);
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(TaskRequest::class);
        CRUD::field('title')->type('text')->label('Назва');
        CRUD::field('description')->type('textarea')->label('Опис');
        CRUD::field('user_id')->type('select')->model('App\Models\User')->label('User')->entity('Користувач')->attribute('name');
        CRUD::field('category_id')->type('select')->model('App\Models\Category')->label('Категорія')->entity('category')->attribute('title');
        CRUD::field('priority_id')->type('select')->model('App\Models\Priority')->label('Пріорітет')->entity('priority')->attribute('title');
        CRUD::field('due_date')->type('date')->label('Дата виконання');
        CRUD::field('slug')->type('text')->label('Slug');
        CRUD::field('is_completed')->type('checkbox')->label('Виконано');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
