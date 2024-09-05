<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Alin Septiani Nur Aisyah',
        'email' => 'alinseptianinuraisyah@mail.ugm.ac.id'
    ]);
});

Route::get('/welcome1', function () {
    return view('welcome1');
});

Route::get('/about1', function () {
    return view('about1');
});

Route::get('/contact1', function () {
    return view('contact1');
});

Route::get('/posts', [PostController:: class, 'index']);

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);

Route::get('products/create', [ProductController::class, 'create']);
