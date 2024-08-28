<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>

    <!-- 使用 Vite 引入通用樣式 -->
    @vite('resources/css/app.css')
    <!-- 使用 Vite 引入頁面專屬樣式 -->
    @vite('resources/css/pages/memberCenter.css')

    <!-- 使用 Vite 引入 JavaScript 文件 -->
    @vite('resources/js/pages/memberCenter.jsx')
</head>
<body>
    @include('layouts.header') <!-- 引入頁首 -->

    <main class="member_center">
        <div class="sidebar">
            <h2>會員中心</h2>
            <p>管理您的帳戶資訊和其他設置。</p>
            <ul>
                <li><a href="#" onclick="handleSectionChange('basic-info'); return false;">
                    基本資料
                </a></li>
                <li><a href="#" onclick="handleSectionChange('schedule'); return false;">
                    課表
                </a></li>
                <li><a href="#" onclick="handleSectionChange('students'); return false;">
                    學生 身分
                </a></li>
                <li><a href="#" onclick="handleSectionChange('teachers'); return false;">
                    老師 身分
                </a></li>
                <li><a href="#" onclick="handleSectionChange('parents'); return false;">
                    家長 身分
                </a></li>
            </ul>
        </div>
        <div id="memberCenterContent" class="content">
            <!-- 內容區域由 React 渲染 -->
        </div>
    </main>

    @include('layouts.footer') <!-- 引入頁尾 -->


</body>
</html>
