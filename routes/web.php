<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/home', function () {
    return redirect()->to(route('dashboard'));
})->middleware(['auth'])->name('home');

Route::get('/user/two-factor-authentication', function () {
    return view('auth.two-factor');
})->middleware(['auth']);
