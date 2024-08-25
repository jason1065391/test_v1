<!-- resources\views\pages\memberCenter.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/memberCenter.css')
    @vite('resources/js/pages/memberCenter.jsx')


</head>

<body>
    @include('layouts.header')
    
    <div id="memberCenter">
        <div class="member_center">
            <!-- 左邊固定瀏覽列 -->
            <div class="sidebar">
                <ul>
                    <li><a href="#" data-target="basic-info">基本資料</a></li>
                    <li><a href="#" data-target="schedule">課表</a></li>
                    <li><a href="#" data-target="students">學生</a></li>
                    <li><a href="#" data-target="teachers">老師</a></li>
                    <li><a href="#" data-target="parents">家長</a></li>
                </ul>
            </div>
            
            <!-- 右邊顯示內容區域 -->
            <div class="content">
                <div id="basic-info" class="content-section">基本資料內容</div>
                <div id="schedule" class="content-section">課表內容</div>
                <div id="students" class="content-section">學生內容</div>
                <div id="teachers" class="content-section">老師內容</div>
                <div id="parents" class="content-section">家長內容</div>
            </div>
        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>
