<!-- resources/views/pages/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- 引入 Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/home.css')

    <!-- 如果需要，引入专门的 JavaScript 文件 -->
    @vite('resources/js/pages/home.js')
</head>

<body>
    @include('layouts.header')
    <!-- 页面主体内容 -->
    <div class="main-content">
        <!-- 内容 -->
    </div>
    @include('layouts.footer')
</body>
</html>
