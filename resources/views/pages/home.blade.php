<!-- resources/views/pages/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/home.css')
</head>

<body>
  @include('layouts.header')
  <!-- 页面主体内容 -->
  <div class="main-content">
      <div class="slideshow-container">

        <div class="mySlides fade">
          <img src="{{ asset('images/hiking_01.jpg') }}" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="{{ asset('images/hiking_02.jpg') }}" style="width:100%">
        </div>

        <div class="mySlides fade">
          <img src="{{ asset('images/hiking_03.jpg') }}" style="width:100%">
        </div>


        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

      </div>

      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
      </div>
  </div>
  @include('layouts.footer')
</body>
</html>
