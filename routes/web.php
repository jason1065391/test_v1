<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\EmailController;
use Illuminate\Support\Facades\Auth;

// 登入和登出路由
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::post('logout', function () {
    Auth::logout();
    return redirect('/'); // 登出後重定向到首頁
})->name('logout');

// 註冊和帳號驗證路由
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register');
Route::post('check_account', [RegisterController::class, 'checkAccount'])->name('check.account');

// 忘記密碼和註冊驗證路由
Route::post('password/reset', [EmailController::class, 'sendEmail'])->name('password.email');
Route::post('email/register', [EmailController::class, 'sendEmail'])->name('email.register'); // 新增的路由，用於註冊

// 保護的路由
Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // 添加其他受保護的路由
});

// 資源路由
Route::resource('tasks', TaskController::class);

// 測試和首頁路由
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/home', function () {
    return view('home');
});
