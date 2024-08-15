<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * 顯示註冊表單
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register'); // 更新為正確的視圖路徑
    }

    /**
     * 處理註冊請求
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'account' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register.form')
                             ->withErrors($validator)
                             ->withInput();
        }

        $user = User::create([
            'name' => $request->input('name'),
            'account' => $request->input('account'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        // 登入用戶
        Auth::login($user);

        return redirect()->route('dashboard'); // 註冊後重定向到儀表板
    }

    public function checkAccount(Request $request)
    {
        $request->validate([
            'account' => 'required|string|unique:users',
        ]);

        // 如果帳號不重複，返回成功訊息
        return response()->json(['message' => 'Account is available.']);
    }
}
