<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @viteReactRefresh
    @vite(['resources/css/app.css','resources/js/auth/account_check.js']) <!-- 引入 Vite 打包的 CSS 和 JS 檔案 -->
    
    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <!-- 設置 CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="register-container">
        <h1>註冊</h1>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <label for="name">名字:</label>
            <input type="text" id="name" name="name" value="{{ old('email') }}" required>
            <br>

            <label for="account">帳號:</label>
            <input type="text" id="account" name="account" value="{{ old('email') }}" required>
            <span id="account-error" style="color: red; display: none;"></span>
            <br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            <br>

            <label for="password">密碼:</label>
            <input type="password" id="password" name="password" 
                   pattern=".{6,}" 
                   title="密碼至少 6 位數" 
                   required>
            <br>

            <label for="gender">性別:</label>
            <select id="gender" name="gender" required>
                <option value="">請選擇</option>
                <option value="male">男性</option>
                <option value="female">女性</option>
                <option value="other">其他</option>
            </select>
            <br>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
