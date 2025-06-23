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

Route::get('/login', function () {
    return view('login');
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

Route::get('/logproduksi', function () {
    return view('logproduksi');
});

Route::get('/logmaintenance', function () {
    return view('logmaintenance');
});

Route::get('/logdetail', function () {
    return view('logmaintenancedetail');
});

Route::get('/logkill', function () {
    return view('logkill');
});

Route::get('/logkilldetail', function () {
    return view('logkilldetail');
});


Route::get('/logaktivitas', function () {
    return view('logaktivitas');
});