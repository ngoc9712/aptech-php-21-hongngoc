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

Route::get('/', function () {
    return view('welcome');
});
Route::get('hien-thi-tat-ca-nguoi-dung','UserController@hienThiTatCaNguoiDung');
Route::get('hien-thi-chi-tiet-nguoi-dung/{id}','UserController@hienThiChiTietNguoiDung');