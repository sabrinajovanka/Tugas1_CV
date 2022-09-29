<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/datapribadi', function () {
    return view('datapribadi');
});

Route::get('/pengalaman', function () {
    return view('pengalaman');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/kontak', function () {
    return view('kontak');
});

