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
    return view('feed.feed');
});

Route::get('/feed', function () {
    return view('feed.feed');
});

Route::get('/reg', function () {
    return view('reg.reg');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/restore', function () {
    return view('restore.restore');
});