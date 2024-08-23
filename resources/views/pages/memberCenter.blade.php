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

</head>

<body>
    @include('layouts.header')
    
    <!-- 页面主体内容 -->
    <div class="container">
        
        <!-- 釘選左邊 - 導覽列 基本資料 1.學生 2.老師 3.家長  -->
        <div class="">

        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>
