<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// 註冊登入路由
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;



// 顯示登入表單
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');

// 處理登入請求
Route::post('login', [LoginController::class, 'login'])->name('login');

// 顯示註冊表單
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');

// 處理註冊請求
Route::post('register', [RegisterController::class, 'register'])->name('register');

// 處理帳號的驗證請求
Route::post('check-account', [RegisterController::class, 'checkAccount'])->name('check.account');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // 添加其他受保護的路由
});


// 登出路由
Route::post('logout', function () {
    Auth::logout();
    return redirect('/'); // 登出後重定向到首頁
})->name('logout');

Route::resource('tasks', TaskController::class);

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('test');
});