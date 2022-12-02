<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function create()
    {
        return view('Admin.Categories.create');
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validate();
        $createdCategory = Category::create([
            'title' => $request->$validatedData['title'],
            'slug' => $request->$validatedData['slug']
        ]);

        if (!$createdCategory)
            return back()->with('failed', 'دسته بندی ایجاد نشد.');
        return back()->with('success', 'دسته بندی با موفقیت ایجاد شد.');
    }

    public function all()
    {

        $categories = Category::paginate(10);

        return view('Admin.Categories.all', compact('categories'));
    }
}
