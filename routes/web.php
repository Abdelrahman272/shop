<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/category', function () {
    return view('website.category');
});

Route::get('/product', function () {
    return view('website.product');
});
