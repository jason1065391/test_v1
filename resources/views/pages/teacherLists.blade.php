<!-- resources\views\studentCases.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師列表</title>

    <!-- 引入全局 CSS 和 JavaScript 文件 -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- 引入首页专属样式 -->
    @vite('resources/css/pages/studentCases.css')

</head>

<body>
    @include('layouts.header')
    
    <!-- 页面主体内容 -->
    <div class="teacherLists_container">
        <h1>老師列表</h1>
        <div class="t_search">
            <div class="t_search_subject">
                <p>請選擇想學的科目：</p>
                <select name="subject" id="subject">
                    <option value="0">請選擇</option>

                </select>
            </div>

            <div class="t_search_salary"> 
                <p>請選擇上課預算(小時)：</p>
                <div class="price-input"> 
                    <div class="price-field"> 
                        <span>最低預算</span> 
                        <input type="number" class="min-input" placeholder="最低預算：100"> 
                    </div> 
                    <div class="price-field"> 
                        <span>最高預算</span> 
                        <input type="number" class="max-input" placeholder="最高預算：100000"> 
                    </div>
                    <!-- 要在加判斷，不可以低於 100 不可以高於 100000，min 不可以大於等於 max  -->
                </div>
            </div>

            <div class="t_search_place">
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

            <div class="t_search_time">
                <label>請選擇預期上課時間(可複選):</label>
                <div>
                    <input type="checkbox" id="morning" value="morning">
                    <label for="morning">早上</label>
                </div>
                <div>
                    <input type="checkbox" id="afternoon" value="afternoon">
                    <label for="afternoon">下午</label>
                </div>
                <div>
                    <input type="checkbox" id="evening" value="evening">
                    <label for="evening">晚上</label>
                </div>
            </div>

            <button id="searchButtont">搜尋</button>
        </div>
    
        <div class="t_list">
            <!-- react -->
        </div>
    </div>
    
    @include('layouts.footer')
</body>
</html>
