<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

// Middleware to store visited page URLs in cookies
Route::middleware('saveUrlToCookie')->group(function () {
    Route::get('/page1', function () {
        return view('page1');
    })->name('page1');

    Route::get('/page2', function () {
        return view('page2');
    })->name('page2');

    Route::get('/about', function () {
        return view('about');
    })->name('about');
});

