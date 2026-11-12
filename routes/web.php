<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrandController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/over', function () {
    return view('over');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::get('/brands/{id}', [BrandController::class, 'show'])->name('brands.show');
