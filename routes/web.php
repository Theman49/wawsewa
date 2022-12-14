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
    return view('pages/home');
});

Route::get('/product', function () {
    return view('pages/detail-product');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::get('/register', function () {
    return view('pages/register');
});

Route::get('/checkout', function () {
    return view('pages/checkout');
});

// Dashboard User
Route::get('/dashboard', function () {
    return view('pages/user/profile');
});
Route::get('/dashboard/profile', function () {
    return view('pages/user/profile');
});
Route::get('/dashboard/address', function () {
    return view('pages/user/address');
});
Route::get('/dashboard/verification', function () {
    return view('pages/user/verification');
});
Route::get('/dashboard/security', function () {
    return view('pages/user/security');
});