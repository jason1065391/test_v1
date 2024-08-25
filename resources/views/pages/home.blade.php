<!-- resources/views/pages/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/home.css')
    @vite('resources/js/pages/home.jsx')

</head>

<body>
  @include('layouts.header')
    <!-- 页面主体内容 -->
    <div id="home"></div>
  @include('layouts.footer')
</body>
</html>