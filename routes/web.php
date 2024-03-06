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
    return view ('home');
});

Route::get('/works', function () {
    return view ('work');
});

Route::get('/contacts', function () {
    return view ('contact');
});

Route::get('/portfolio', function () {
    return view ('portfolio');
});