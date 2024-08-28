<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>老師列表</title>

    <!-- 引入全站通用樣式 -->
    @vite('resources/css/app.css')
    <!-- 引入頁面專屬樣式 -->
    @vite('resources/css/pages/teacherLists.css')

</head>
<body>
    @include('layouts.header') <!-- 引入頁首 -->

    <!-- 頁面主體內容 -->
    <main>
        <div class="teacherLists_container">
            <h1>老師列表</h1>
            <div class="t_search">
                <div class="t_search_subject">
                    <p>請選擇想學的科目：</p>
                    <select name="subject" id="subject">
                        <option value="0">請選擇</option>
                        <!-- 這裡可以加入動態選項 -->
                    </select>
                </div>

                <div class="t_search_money"> 
                    <p>請輸入上課預算(小時)：</p>
                    <div class="price-input"> 
                        <div class="price-field"> 
                            <span>最低預算</span> 
                            <input type="number" class="min-input" placeholder="最低預算：100"> 
                        </div> 
                        <div class="price-field"> 
                            <span>最高預算</span> 
                            <input type="number" class="max-input" placeholder="最高預算：100000"> 
                        </div>
                    </div>
                </div>

                <div class="t_search_place">
                    <p>請選擇上課地點：</p>
                    <label for="city">選擇縣市：</label>
                    <select name="city" id="city">
                        <option value="">請選擇縣市</option>
                        <!-- 這裡可以加入動態選項 -->
                    </select>

                    <label for="districts">選擇區域：</label>
                    <div id="districts" class="districts_container">
                        <!-- 區域的 checkbox 會動態加到這裡 -->
                    </div>
                </div>

                <button id="searchButton">搜尋</button>
            </div>
        
            <div id="react-root" class="t_list">
                <!-- React 組件將掛載到這裡 -->
            </div>
        </div>
    </main>
    
    @include('layouts.footer') <!-- 引入頁尾 -->

</body>
</html>
