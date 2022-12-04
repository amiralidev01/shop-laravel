<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Categories\StoreRequest;
use App\Http\Requests\Admin\Categories\UpdateRequest;
use App\Models\Category;


class CategoriesController extends Controller
{
    public function create()
    {
        return view('Admin.Categories.create');
    }

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();
        $createdCategory = Category::create([
            'title' => $validatedData['title'],
            'slug' => $validatedData['slug']
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


    public function delete($Category_id)
    {
        $category = Category::find($Category_id);

        $category->delete();

        return back()->with('success', 'دسته بندی با موفقیت حذف شد');

    }

    public function update($Category_id)
    {
        $category = Category::find($Category_id);

        return view('Admin.Categories.update', compact('category'));
    }

    public function edit(UpdateRequest $request, $Category_id)
    {
        $ValidatedData = $request->validated();

        $category = Category::find($Category_id);
        $UpdatedCategory = $category->update([
            'title' => $ValidatedData['title'],
            'slug' => $ValidatedData['slug']
        ]);

        if (!$UpdatedCategory)
            return back()->with('failed', 'دسته بندی ویرایش نشد');
        return back()->with('success', 'دسته بندی با موفقیت ویرایش شد');
    }

}
