<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>常見問題</title>

    <!-- 使用 Vite 引入 CSS 文件 -->
    @vite('resources/css/pages/faq.css')

</head>
<body>
    @include('layouts.header') <!-- 引入頁首 -->
    <main>
        
        <section class="faq">
            <h1>常見問題 (FAQ)</h1>

            <div class="faq-item">
                <h2>如何註冊成為平台的用戶？</h2>
                <p>1. 進入我們的網站首頁。</p>
                <p>2. 點擊右上角的「註冊」按鈕。</p>
                <p>3. 填寫所需的個人資料，包括姓名、電子郵件地址和密碼。</p>
                <p>4. 點擊「提交」完成註冊。</p>
                <p>5. 註冊完成後，請登入會員中心並填寫相關資訊，以選擇您希望的身份（學生、老師或家長）並啟用相應功能。</p>
            </div>

            <div class="faq-item">
                <h2>如何搜尋和預約老師？</h2>
                <p>1. 登入您的帳號。</p>
                <p>2. 前往「搜尋老師」頁面。</p>
                <p>3. 根據學科、教學經驗、評價等篩選條件搜尋老師。</p>
                <p>4. 查看老師的詳細資料後，選擇適合的老師並點擊「預約課程」。</p>
                <p>5. 選擇您希望的課程時間，完成預約。</p>
            </div>

            <div class="faq-item">
                <h2>如何搜尋和預約老師？</h2>
                <p>1. 登入您的帳號。</p>
                <p>2. 前往「搜尋老師」頁面。</p>
                <p>3. 根據學科、教學經驗、評價等篩選條件搜尋老師。</p>
                <p>4. 查看老師的詳細資料後，選擇適合的老師並點擊「預約課程」。</p>
                <p>5. 選擇您希望的課程時間，完成預約。</p>
            </div>

            <div class="faq-item">
                <h2>老師如何在平台上創建和管理自己的課程？</h2>
                <p>1. 登入您的帳號。</p>
                <p>2. 前往「搜尋老師」頁面。</p>
                <p>3. 根據學科、教學經驗、評價等篩選條件搜尋老師。</p>
                <p>4. 查看老師的詳細資料後，選擇適合的老師並點擊「預約課程」。</p>
                <p>5. 選擇您希望的課程時間，完成預約。</p>
            </div>
        </section>
    </main>
    @include('layouts.footer') <!-- 引入頁尾 -->

</body>
</html>
