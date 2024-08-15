<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * 可批量賦值的屬性。
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'account',
        'email',
        'password',
    ];

    /**
     * 隱藏的屬性，這些屬性將不會被轉換為數組或 JSON。
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * 將屬性轉換為原生類型。
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * 加密密碼設置器。
     *
     * 當設置 `password` 屬性時，自動加密密碼。
     *
     * @param  string  $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    /**
     * 驗證郵件地址的通知。
     *
     * 該方法會在用戶註冊後發送電子郵件驗證通知。
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\VerifyEmailNotification);
    }
}
