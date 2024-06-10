<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome'); // Route for the specific 'welcome' page
});

Route::get('/admin', function () {
    return view('admin'); // Route for the 'admin' page
});

Route::get('/login', function () {
    return view('login'); // Route for the 'login' page
});

Route::get('/aboutme', function () {
    return view('aboutme'); // Route for the 'login' page
});
Route::get('/calendar', function () {
    return view('calendar'); // Route for the 'login' page
});