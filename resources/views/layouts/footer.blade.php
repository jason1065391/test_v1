<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Example</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"  />
</head>
<body>
    <footer>
        <div class="footer-content">
            <div class="footer-section about">
                <h2>關於我們</h2>
                <p>我們公司致力於提供高品質的教育服務，幫助學生找到最合適的教師。自成立以來，我們已經成功地幫助了數以萬計的學生和教師實現他們的學習目標。</p>
                <br><p><strong>使命：</strong> 提供卓越的教育資源，促進學習和教學的發展。</p>
                <br><p><strong>願景：</strong> 成為全球領先的教育服務平台，推動教育公平和質量提升。</p>
            </div>
            <div class="footer-section contact">
                <h2>客服資訊</h2>
                <p> <i class="fa-solid fa-phone"></i> <strong>電話：</strong> +123 456 7890</p> 
                <p> <i class="fa-solid fa-envelope"></i> <strong>電子郵件：</strong> support@example.com</p>
                <p> <i class="fa-solid fa-headset"></i> <strong>在線客服：</strong> <a href="#">點擊這裡開始聊天</a></p>
            </div>
            <div class="footer-section social">
                <h2>社群媒體</h2>
                <a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a>
                <a href="https://facebook.com" class="social-link"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://instagram.com" class="social-link"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="footer-section sitemap">
                <h2>網站地圖</h2>
                <ul>
                    <li><button onclick="window.location.href='{{ route('home') }}'">首頁</button></li>
                    <li><button onclick="window.location.href='{{ route('about') }}'">關於我們</button></li>
                    <li><button onclick="window.location.href='{{ route('services') }}'">服務</button></li>
                    <li><button onclick="window.location.href='{{ route('contact') }}'">聯繫我們</button></li>
                    <li><button onclick="window.location.href='{{ route('faq') }}'">常見問題</button></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
