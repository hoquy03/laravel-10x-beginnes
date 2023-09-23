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
// xác định các tuyến đường của ứng dụng
// Cú pháp cơ bản của hàm view() là:

// view('tên_giao_diện', ['danh_sách_dữ_liệu']);

Route::get('/', function () {
    return view('home');
});
// Route::view('/', 'home');// đây là cách thử 2 hơi củ chuối hahah

