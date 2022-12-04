<?php

use App\Http\Controllers\Admin\CategoriesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('Frontend.Products.all');
});


Route::get('/admin', function () {
    return view('Admin.index');
});


// Admin/Categories/Create

Route::prefix('admin')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('create', [CategoriesController::class, 'create'])->name('admin.categories.create');
        Route::get('', [CategoriesController::class, 'all'])->name('admin.categories.all');
        Route::post('', [CategoriesController::class, 'store'])->name('admin.categories.store');
        Route::delete('{Category_id}/delete', [CategoriesController::class, 'delete'])->name('admin.categories.delete');
        Route::get('{Category_id}/update', [CategoriesController::class, 'update'])->name('admin.categories.update');
        Route::put('{Category_id}/edit', [CategoriesController::class, 'edit'])->name('admin.categories.edit');

    });
});
