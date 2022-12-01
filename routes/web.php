<?php

use Illuminate\Support\Facades\Route;


Route::get('/products/all', function () {
    return view('Frontend.Products.all');
});
