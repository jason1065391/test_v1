<!-- resources/views/pages/services.blade.php -->
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服務介紹</title>
        <!-- 引入首頁專屬樣式 -->
        @vite('resources/css/pages/services.css')
</head>
<body>

    @include('layouts.header') <!-- 引入頁首 -->

    <div class="container">
        <section class="services-intro">
            <h1>服務介紹</h1>
            <p>我們提供多種家教服務，滿足學生、家長和老師的需求。以下是我們主要的服務內容：</p>
        </section>
        <section class="service-list">
            <div class="service-item">
                <h2>學生 身分</h2>
                <ul>
                    <li>註冊和登入功能：學生可以輕鬆註冊個人帳號，並通過安全的登入系統進入個人學習區域。</li>
                    <li>搜索老師、預約課程：學生可以根據學科、教學經驗、評價等篩選條件搜索合適的老師，並直接在線預約課程。</li>
                    <li>查看和管理自己的課表：學生可以查看已安排的課程時間表，並進行相應的調整和管理。</li>
                    <li>查看與老師的溝通記錄：學生可以查看與老師的過去溝通記錄，方便回顧和複習。</li>
                    <li>提交作業和查看反饋：學生可以通過平台提交作業，並查看老師的評價和反饋。</li>
                    <li>參加在線測驗和考試：學生可以參加老師設計的在線測驗和考試，評估學習進度。</li>
                </ul>
            </div>
            <div class="service-item">
                <h2>老師 身分</h2>
                <ul>
                    <li>註冊和登入功能：老師可以註冊專業教師帳號，並通過安全的登入系統進入教學管理區域。</li>
                    <li>創建和管理課程：老師可以創建和設計課程內容，並管理學生的課程報名。</li>
                    <li>查看和管理學生的課表：老師可以查看所教學生的課表，並進行調整和管理。</li>
                    <li>與學生溝通：老師可以通過平台的消息系統與學生進行溝通。</li>
                    <li>提交和管理學生成績：老師可以記錄和管理學生的成績。</li>
                    <li>查看學生反饋和評價：老師可以查看學生對課程的反饋。</li>
                    <li>財務管理：老師可以查看課程收入，管理帳戶餘額和支付記錄。</li>
                </ul>
            </div>
            <div class="service-item">
                <h2>家長 身分</h2>
                <ul>
                    <li>註冊和登入功能：家長可以創建帳號，並進入個人專區。</li>
                    <li>搜索老師：家長可以根據篩選條件搜尋適合孩子需求的老師。</li>
                    <li>預約課程：家長可以為孩子預約課程，查看老師的可用時段。</li>
                    <li>查看孩子的學習進度和課表：家長可以查看孩子的課表和學習進度，了解學習情況。</li>
                    <li>與老師溝通：家長可以與老師溝通孩子的學習狀況。</li>
                    <li>管理多個孩子的帳號：家長可以管理多個孩子的帳號和學習記錄。</li>
                    <li>支付與帳單管理：家長可以進行課程支付，查看支付記錄。</li>
                </ul>
            </div>
        </section>
    </div>

    @include('layouts.footer') <!-- 引入頁尾 -->

</body>
</html>
