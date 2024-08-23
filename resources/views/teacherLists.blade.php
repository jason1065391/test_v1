<!-- resources\views\teacherLists.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/teacherLists.css')

    <!-- 如果需要，引入专门的 JavaScript 文件 -->
    @vite('resources/js/pages/teacherLists.js')
</head>

<body>
  @include('layouts.header')
  <!-- 页面主体内容 -->
  <div class="main-content">
      
  </div>
  @include('layouts.footer')
</body>
</html>
