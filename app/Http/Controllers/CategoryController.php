<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::query()->paginate(5);
        return view('admin.categories.index',[
            'categories' => $categories,
        ]);
    }
}
