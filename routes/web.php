<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'displayForm'])->name('user-form');
Route::post('/user-form', [UserController::class, 'processForm']);
Route::get('/home', function () {
    return view('home'); // Home view
})->name('home'); // Name this route

Route::get('/access-denied', function () {
    return view('access-denied'); // Create an access denied view
})->name('access-denied'); // Name this route

Route::get('/about', function () {
    return view('about'); // Create an about view
})->name('about'); // Name this route

Route::get('/projects', function () {
    return view('projects'); // Create a projects view
})->name('projects'); // Name this route

Route::get('/lab1', function () {
    return view('lab1');
});

Route::get('/lab2', function () {
    return view('lab2');
});

Route::get('/lab3', function () {
    return view('lab3');
});

Route::get('/lab4', function () {
    return view('lab4');
});

Route::get('/services', function () {
    return view('services'); // Create a services view
})->name('services'); // Name this route

Route::get('/contact', function () {
    return view('contact'); // Create a contact view
})->name('contact'); // Name this route

Route::get('/user-form', function () {
    return view('user-form');
});

