<?php

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

Route::get('//', function () {
    return view('welcome');
});
Route::get('/ngocne',function(){
    return 'Ngọc nè';
});
Route::get('login',function(){
    return view('login');
});
Route::get('dashboard',function(){
    return view('dashboard');
});