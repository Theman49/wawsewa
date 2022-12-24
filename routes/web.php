<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

function http_request($url){
    $response = Http::get($url);
    $output = $response->body();
    return $output;
}

 
 

Route::get('/', function () {

    $res = http_request('https://dummyjson.com/products?limit=10');
    $data = json_decode($res, true);
    // $data = json_decode(http_request('http://localhost:8000/products.json'), true);
    return view('pages/home', [
        'products'=>$data['products']
    ]);
});

Route::get('/product/{id}', function ($id) {
    $res = http_request("https://dummyjson.com/products/$id");
    $data = json_decode($res, true);
    return view('pages/detail-product', [
        'product'=>$data
    ]);
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