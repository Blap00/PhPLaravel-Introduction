<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//GET Sites

Route::get('/auth/login', function () {
    return view('registration.login');
})->name('login');
Route::get('/auth/register', function () {
    return view('registration.register');
})->name('register');
Route::get('/', function () {
    return view('index');
})->name('index');

//POST sites
Route::post('/auth/login', function () {
    return view('registration.login');
});
Route::post('/auth/register', [UserController::class, 'register'], function () {
    return view('registration.register');
});
