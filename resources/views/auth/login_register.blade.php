<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登入 / 註冊</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/css/pages/loginregister.css', 'resources/js/auth/account_check.js'])
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    @include('layouts.header')

    <main>
        <div class="auth-form-container">
            <!-- 註冊表單 -->
            <div class="registration-form" id="registration">
                <div class="form-header">
                    <span>已有帳號？ <a href="#" onclick="login()">登入</a></span>
                    <h1>註冊</h1>
                </div>
                <form id="registration-form">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="姓名">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="帳號">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-input" placeholder="電子郵件">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" placeholder="密碼">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-submit" value="註冊">
                    </div>
                    <div class="form-options">
                        <div class="option">
                            <input type="checkbox" id="register-remember">
                            <label for="register-remember">記住我</label>
                        </div>
                        <div class="option">
                            <a href="#">條款與條件</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- 登入表單 -->
            <div class="login-form" id="login">
                <div class="form-header">
                    <span>沒有帳號？ <a href="#" onclick="register()">註冊</a></span>
                    <h1>登入</h1>
                </div>
                <form id="login-form">
                    <div class="form-group">
                        <input type="text" class="form-input" placeholder="帳號">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" placeholder="密碼">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-submit" value="登入">
                    </div>
                    <div class="form-options">
                        <div class="option">
                            <input type="checkbox" id="login-remember">
                            <label for="login-remember">記住我</label>
                        </div>
                        <div class="option">
                            <a href="#">忘記密碼</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    @include('layouts.footer')
</body>
</html>
