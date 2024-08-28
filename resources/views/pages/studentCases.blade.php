<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>學生案件</title>

    <!-- 引入 Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <!-- 使用 Vite 引入全站通用樣式 -->
    @vite('resources/css/app.css')
    <!-- 使用 Vite 引入頁面專屬樣式 -->
    @vite('resources/css/pages/studentCases.css')

</head>
<body>
    @include('layouts.header')
    
    <!-- 页面主体内容 -->
    <main>
        <div class="studentCases_container">
            <h1>學生案件</h1>
            <div class="s_search">
                <div class="s_search_subject">
                    <p>請選擇教學的科目：</p>
                    <select name="subject" id="subject">
                        <option value="0">請選擇</option>
                        <!-- 填充選項 -->
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
                    </div>
                </div>

                <div class="s_search_place">
                    <p>請選擇上課地點：</p>
                    <label for="city">選擇縣市：</label>
                    <select name="city" id="city">
                        <option value="">請選擇縣市</option>
                        <!-- 填充選項 -->
                    </select>

                    <label for="districts">選擇區域：</label>
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
    </main>
    
    @include('layouts.footer')
</body>
</html>
