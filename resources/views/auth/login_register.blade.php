
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @viteReactRefresh
    @vite(['resources/css/app.css','resources/css/pages/loginregister.css','resources/js/auth/account_check.js']) <!-- 引入 Vite 打包的 CSS 和 JS 檔案 -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    

    <!-- 設置 CSRF token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="form-box">
        <!---------------------------------------------- registration form ------------------------------------------------->
        <div class="register-container" id="register">
            <div class="top">
                <span>Have an account? <a href="#" onclick="login()">Login</a></span>
                <header>Sign Up</header>
            </div>

            <div class="two-forms">
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Firstname">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="text" class="input-field" placeholder="Lastname">
                    <i class="bx bx-user"></i>
                </div>
            </div>
            <div class="input-box">
                <input type="text" class="input-field" placeholder="Email">
                <i class="bx bx-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Register">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="register-check">
                    <label for="register-check">Remember Me</label>
                </div>
                <div class="two">
                    <label for=""><a href="#">Terms & conditions</a></label>
                </div>
            </div>
        </div>

        <!---------------------------------------------- login form ------------------------------------------------->
        <div class="login-container" id="login">
            <div class="top">
                <span>Don't have an account? <a href="#" onclick="register()">Sign Up</a></span>
                <header>Login</header>
            </div>

            <div class="input-box">
                <input type="text" class="input-field" placeholder="Username or Email">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-box">
                <input type="password" class="input-field" placeholder="Password">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-box">
                <input type="submit" class="submit" value="Sign In">
            </div>
            <div class="two-col">
                <div class="one">
                    <input type="checkbox" id="login-check">
                    <label for="login-check">Remember Me</label>
                </div>
                <div class="two">
                    <label for=""><a href="#">Forgot password</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
