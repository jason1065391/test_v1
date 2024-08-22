<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class BasicController extends Controller
{
    public function infoEdit(Request $request)
    {
        // 驗證輸入數據
        $request->validate([
            'name' => 'nullable|string|max:30', 
            'gender' => 'nullable|in:1,2', 
            'phone' => 'nullable|string', 
            'birthday' => 'nullable|date', 
        ]);

        $user = Auth::user();
        
        // 更新用戶資料
        if ($request->has('name')) {
            $user->name = $request->input('name');
        }
        if ($request->has('gender')) {
            $user->gender = $request->input('gender');
        }
        if ($request->has('phone')) {
            $user->phone = $request->input('phone');
        }
        if ($request->has('birthday')) {
            $user->birthday = $request->input('birthday');
        }

        // 儲存更新
        $user->save();

        // 重定向到指定的路由
        return Redirect::route('basic.page');
    }
}



// BasicController 用於處理用戶的基本資訊更新（如名稱、性別、電話、生日）。 
// 帳號、電子郵件和密碼通常被視為憑證，這些更新操作可能涉及更高的安全性考量，通常會在單獨的控制器中處理。