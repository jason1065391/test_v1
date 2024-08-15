<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\AuthorizationException;

class EmailVerificationController extends Controller
{
    use VerifiesEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 限制只有已經登入的用戶可以使用此控制器的方法
        $this->middleware('auth');
        // 這樣可以保護電子郵件驗證頁面，只有需要驗證的用戶才能看到
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    /**
     * 顯示驗證郵件的頁面。
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // 如果用戶已經驗證過，直接重定向到首頁
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('dashboard');
        }

        // 如果未驗證，顯示電子郵件驗證頁面
        return view('auth.verify-email');
    }

    /**
     * 驗證用戶的電子郵件地址。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function verify(Request $request)
    {
        $user = $request->user();

        // 確保驗證連結有效且用戶尚未驗證
        if (! $user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
        }

        // 如果驗證成功，重定向到儀表板或其他頁面
        return redirect()->route('dashboard')->with('verified', true);
    }

    /**
     * 重新發送驗證郵件。
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        // 檢查用戶是否已經驗證過電子郵件
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->route('dashboard');
        }

        // 發送驗證郵件
        $request->user()->sendEmailVerificationNotification();

        // 返回成功消息
        return back()->with('resent', true);
    }
}
