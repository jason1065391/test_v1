<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        // 驗證請求資料
        $this->validateRequest($request);

        // 處理忘記密碼請求
        if ($request->has('email') && !$request->has(['account', 'password', 'password_confirmation', 'gender', 'name'])) {
            return $this->handlePasswordReset($request);
        }

        // 處理註冊請求
        if ($request->has(['account', 'password', 'password_confirmation', 'gender', 'email', 'name'])) {
            return $this->handleRegistration($request);
        }

        // 資料無效
        return response()->json([
            'success' => false,
            'message' => '輸入有誤(不是註冊也不是重設)'
        ]);
    }

    private function validateRequest(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'account' => 'sometimes|required|string',
            'password' => 'sometimes|required|string|min:6',
            'password_confirmation' => 'sometimes|required_with:password|same:password',
            'name' => 'sometimes|required|string',
            'gender' => 'sometimes|required|string'
        ]);
    }

    private function handlePasswordReset(Request $request)
    {
        $verifyCode = rand(100000, 999999);
        $email = $request->email;

        $subject = "重設密碼驗證碼";
        $message = "您的重設密碼驗證碼是 $verifyCode";

        try {
            Mail::raw($message, function ($message) use ($email, $subject) {
                $message->to($email)
                    ->subject($subject);
            });

            Cache::put('password_reset_' . $email, ['verifyCode' => $verifyCode], 600);

            return response()->json(['success' => true, 'message' => '重設密碼 email寄送成功']);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '重設密碼 email 發送失敗',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    private function handleRegistration(Request $request)
    {
        $verifyCode = rand(100000, 999999);
        $account = $request->account;
        $email = $request->email;
        $name = $request->name;
        $password = $request->password;
        $password_confirmation = $request->password_confirmation;
        $gender = $request->gender;

        if (User::where('account', $account)->exists()) {
            return response()->json([
                'success' => false,
                'message' => '此帳號已被使用，請更換謝謝'
            ]);
        }

        if (User::where('email', $email)->exists()) {
            return response()->json([
                'success' => false,
                'message' => '此電子郵件已被使用，請更換謝謝'
            ]);
        }

        $subject = "LearnLink註冊驗證碼";
        $message = "您的註冊驗證碼是 $verifyCode";

        try {
            Mail::raw($message, function ($message) use ($email, $subject) {
                $message->to($email)
                    ->subject($subject);
            });

            Cache::put('registration_' . $email, ['verifyCode' => $verifyCode], 600);

            $request->session()->put('registration_data', [
                'email' => $email,
                'account' => $account,
                'name' => $name,
                'gender' => $gender,
                'password' => Hash::make($password)
            ]);

            return response()->json(['success' => true, 'message' => '註冊 email 寄送成功']);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => '註冊 email 發送失敗',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
