<!-- resources\views\studentCases.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生案件</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/studentCases.css')

</head>

<body>
    @include('layouts.header')
    
    <!-- 页面主体内容 -->
    <div class="studentCases_container">
        <h1>學生案件</h1>
        <div class="s_search">
            <div class="s_search_subject">
                <p>請選擇教學的科目：</p>
                <select name="subject" id="subject">
                    <option value="0">請選擇</option>

                </select>
            </div>

            <div class="s_search_salary"> 
                <p>請輸入上課預期薪資(時薪)：</p>
                <div class="price-input"> 
                    <div class="price-field"> 
                        <span>最低預期</span> 
                        <input type="number" class="min-input" placeholder="最低預期：100"> 
                    </div> 
                    <div class="price-field"> 
                        <span>最高預期</span> 
                        <input type="number" class="max-input" placeholder="最高預期：100000"> 
                    </div>
                    <!-- 要在加判斷，不可以低於 100 不可以高於 100000，min 不可以大於等於 max  -->
                </div>
            </div>

            <div class="s_search_place">
                <p>請選擇上課地點：</p>
                <label for="city">選擇縣市：</label>
                <select name="city" id="city">
                    <option value="">請選擇縣市</option>

                </select>

                <label for="districts">選擇區域：</label>
                <br>
                <div id="districts" class="districts_container">
                    <!-- 區域的 checkbox 會動態加到這裡 -->
                </div>
            </div>

            <button id="searchButtons">搜尋</button>
        </div>
    
        <div class="s_cases">
            <!-- react -->
        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>
