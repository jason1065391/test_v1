<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\EmailController;
use Illuminate\Support\Facades\Auth;

// 登入和登出路由
Route::post('logout', function () {
    Auth::logout();
    return redirect('/'); // 登出後重定向到首頁
})->name('logout');

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
    return view('pages/home');
})->name('home');

// 關於我們
Route::get('/about', function () {
    return view('pages/aboutUs');
})->name('about');

// 服務
Route::get('/services', function () {
    return view('pages/services');
})->name('services');

// 聯絡我們
Route::get('/contact', function () {
    return view('pages/contactUs');
})->name('contact');

//常見問題
Route::get('/faq', function () {
    return view('pages/faq');
})->name('faq');

// ******************************************************************

// 學生案件
Route::get('/studentCases', function () {
    return view('pages/studentCases');
})->name('studentCases');

// 老師列表
Route::get('/teacherLists', function () {
    return view('pages/teacherLists');
})->name('teacherLists');

//會員中心
Route::get('/memberCenter', function () {
    return view('pages/memberCenter');
})->name('memberCenter');

// ************************************************

//註冊登入
Route::get('/login_register', function () {
    return view('auth/login_register');
})->name('login_register');