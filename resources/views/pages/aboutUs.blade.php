<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>關於我們</title>

    <!-- 引入通用樣式 -->
    @vite('resources/css/app.css')
    <!-- 引入頁面專屬樣式 -->
    @vite('resources/css/pages/aboutUs.css')
</head>
<body>
    @include('layouts.header') <!-- 引入頁首 -->
    
    <main>
        <div class="container">
            <section class="company-intro">
                <h1>公司簡介</h1>
                <p>我們是一家致力於提升學習體驗的家教平台公司，專注於連結學生、家長和老師。我們的使命是通過創新的技術和優質的服務，提供一個高效、便捷的教育平台。我們的團隊由一群充滿熱情和專業的教育專家組成，他們擁有多年的教育行業經驗，致力於打造最具價值的家教平台。</p>
            </section>
            <section class="mission">
                <h2>使命</h2>
                <p>我們的使命是提供一個全面、靈活的家教服務平台，讓每一位學生都能找到適合自己的老師，每一位老師都能發揮自己的專長，每一位家長都能放心地為孩子找到優質的教育資源。我們相信教育的力量，並致力於通過我們的平台促進知識的傳遞和學習成果的提升。</p>
            </section>
            <section class="vision">
                <h2>願景</h2>
                <p>我們的願景是成為全球領先的家教服務平台，為世界各地的學生、家長和老師提供最佳的學習解決方案。我們希望通過不斷創新和優化服務，成為每個家庭和教育工作者的首選平台。我們致力於打造一個以學習者為中心的教育生態系統，推動教育行業的發展和進步。</p>
            </section>
        </div>
    </main>

    @include('layouts.footer') <!-- 引入頁尾 -->
</body>
</html>
