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
    return view('index');
});

Route::get('/steambox', function () {
    return view('steambox');
});

Route::get('/pemasakan', function () {
    return view('pemasakan');
});

Route::get('/resep', function () {
    return view('resep');
});