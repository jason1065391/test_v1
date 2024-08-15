<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/register.js'])
    <!-- 引入 jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // 在全局範圍內設置變量
        window.routeCheckAccount = "{{ route('check.account') }}";
    </script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="account">Account:</label>
            <input type="text" id="account" name="account" required>
            <span id="account-error" style="color: red; display: none;"></span>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
