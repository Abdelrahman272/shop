<?php

use App\Http\Controllers\Dashboard\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/login', function () {
    return view('dashboard.login');
});

Route::resource('/categories', CategoryController::class);
