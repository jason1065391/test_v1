<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// 註冊登入路由
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


// 顯示登入表單
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');

// 處理登入請求
Route::post('login', [LoginController::class, 'login'])->name('login');

// 顯示註冊表單
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

// 處理註冊請求
Route::post('register', [RegisterController::class, 'register'])->name('register');

// 其他需要身份驗證的路由
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard'); // 假設有一個 dashboard.blade.php 視圖
    })->name('dashboard');

    // 添加其他受保護的路由
});

// 登出路由
Route::post('logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});