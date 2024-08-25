<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />


</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('logo.png') }}" alt="Logo">
                </a>
            </div>
            <ul class="nav-links">
                <!-- 網站地圖部分 -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">網站地圖 <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('about') }}">關於我們</a></li>
                        <li><a href="{{ route('services') }}">服務</a></li>
                        <li><a href="{{ route('contact') }}">聯繫我們</a></li>
                        <li><a href="{{ route('faq') }}">常見問題</a></li>
                    </ul>
                </li>

                <!-- 課程功能部分 -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle">課程功能 <i class="fas fa-caret-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ url('/teacher-list') }}">老師列表</a></li>
                        <li><a href="{{ url('/student-case') }}">學生案件</a></li>
                        @auth
                            <li><a href="{{ url('/teacher-resume') }}">老師發布履歷</a></li>
                            <li><a href="{{ url('/student-find-teacher') }}">學生發布案件</a></li>
                        @else
                            <li><a href="#" onclick="alert('請先登入！');">老師發布履歷</a></li>
                            <li><a href="#" onclick="alert('請先登入！');">學生發布案件</a></li>
                        @endauth
                    </ul>
                </li>

                <!-- 使用者功能和通知 -->
                @auth
                    <li class="dropdown">
                        <a href="#" class="user-menu">
                            <img src="{{ asset('user-avatar.png') }}" alt="User Avatar">
                            <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/member-center') }}">會員中心</a></li>
                            <li><a href="{{ url('/logout') }}">登出</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="notification-btn">
                            <i class="fas fa-bell"></i>
                            <span class="badge">3</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('/notifications/teacher') }}">老師通知</a></li>
                            <li><a href="{{ url('/notifications/student') }}">學生通知</a></li>
                            <li><a href="{{ url('/notifications/parent') }}">家長通知</a></li>
                        </ul>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/login') }}" class="login-btn">登入/註冊</a>
                    </li>
                @endauth
            </ul>
        </nav>
    </header>
</body>
</html>
