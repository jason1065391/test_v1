<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- 設置字符編碼為 UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- 設置視窗縮放比例 -->
    <title>Register</title> <!-- 頁面標題 -->
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/register.js']) <!-- 引入 Vite 打包的 CSS 和 JS 檔案 -->
    
    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery 函式庫，用於簡化 JavaScript 編程 -->
    
    <script>
        // 在全局範圍內設置變量
        window.routeCheckAccount = "{{ route('check.account') }}"; <!-- 定義全局變量，存儲檢查帳號是否存在的路由 URL -->
    </script>

    <!-- 設置 CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- 用於 AJAX 請求的 CSRF 防護 -->
</head>
<body>
    <div class="register-container">
        <h1>Register</h1> <!-- 註冊頁面標題 -->
        
        <!-- 註冊表單 -->
        <form method="POST" action="{{ route('register') }}"> <!-- 表單的提交方法為 POST，提交到註冊路由 -->
            @csrf <!-- CSRF 保護，防止跨站請求偽造攻擊 -->

            <label for="name">名字:</label> <!-- 名字欄位的標籤 -->
            <input type="text" id="name" name="name" required> <!-- 名字輸入框 -->
            <br>

            <label for="account">帳號:</label> <!-- 帳號欄位的標籤 -->
            <input type="text" id="account" name="account" required> <!-- 帳號輸入框 -->
            <span id="account-error" style="color: red; display: none;"></span> <!-- 顯示帳號錯誤消息的區域 -->
            <br>

            <label for="email">Email:</label> <!-- 電子郵件欄位的標籤 -->
            <input type="email" id="email" name="email" required> <!-- 電子郵件輸入框 -->
            <br>

            <label for="password">密碼:</label> <!-- 密碼欄位的標籤 -->
            <input type="password" id="password" name="password" required> <!-- 密碼輸入框 -->
            <br>

            <button type="submit">Register</button> <!-- 提交按鈕 -->
        </form>
    </div>
</body>
</html>
