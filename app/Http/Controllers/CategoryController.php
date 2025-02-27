<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller{
    public function menu() {

        $categories = Category::whereActive(1)->with('translations')->get();

        return view('common.menu', compact('categories'));
    }
}
