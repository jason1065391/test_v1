<!-- resources/views/pages/memberCenter.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/css/pages/memberCenter.css'])
</head>
<body>
    @include('layouts.header')

    <div id="memberCenter"></div> <!-- 確保這裡的 ID 和 memberCenter.jsx 中的一致 -->

    @include('layouts.footer')

    <!-- 引入專用的 JavaScript 文件 -->
    @vite('resources/js/pages/memberCenter.jsx')
</body>
</html>
