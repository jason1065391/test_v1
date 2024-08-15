<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * 顯示儀表板頁面
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard'); // 顯示 dashboard.blade.php 視圖
    }
}