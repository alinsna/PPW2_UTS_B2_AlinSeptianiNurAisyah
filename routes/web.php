<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PemainMUController;

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

Route::resource('products', ProductController::class);

Route::get('products/create', [ProductController::class, 'create']);

Route::resource('buku', BukuController::class);

Route::get('buku/index', [BukuController::class, 'index']);

Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');

Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');

Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');

Route::post('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');

Route::resource('pemainmu', PemainMUController::class);

Route::get('pemainmu/index', [PemainMUController::class, 'index']);
