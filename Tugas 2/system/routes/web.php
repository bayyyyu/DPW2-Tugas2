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

Route::get('welcome', function () {
    return view('welcome');
});


route::get('login', function(){
    return view('template.login');
});

route::get('register', function(){
    return view('template.register');
});

route::get('products', function(){
    return view('template.products');
});

route::get('index', function(){
    return view('template.index');
});

route::get('detail_products', function(){
    return view('template.detail_products');
});


