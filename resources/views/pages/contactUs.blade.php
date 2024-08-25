<!-- resources/views/pages/contactUs.blade.php -->
<!DOCTYPE html>
<html lang="zh-Hant">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>聯繫我們</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"  />


    <!-- 使用 Vite 引入 CSS 文件 -->
    @vite('resources/css/pages/contactUs.css')

</head>
<body>
    @include('layouts.header') <!-- 引入頁首 -->

    <div class="container">
        <section class="contact-info">
            <h1>聯繫我們</h1>
            <div class="info">
                <div class="contact-detail">
                    <h2>聯繫資訊</h2>
                    <p><strong>地址：</strong>台北市中正區市府路123號</p>
                    <p><strong>電話：</strong>+886 2 1234 5678</p>
                    <p><strong>電子郵件：</strong><a href="mailto:info@example.com">info@example.com</a></p>
                </div>
                <div class="social-media">
                    <h2>社交媒體</h2>
                    <p><a href="#" ><i class="fa-brands fa-linkedin"></i> LinkedIn </a></p>
                    <p><a href="#" ><i class="fa-brands fa-facebook"></i> Facebook </a></p>
                    <p><a href="#" ><i class="fa-brands fa-instagram"></i> Instagram </a></p>
                </div>
            </div>
        </section>

        <section class="contact-form">
            <h2>聯絡表單</h2>
            <form > 
                
                <label for="name">姓名：</label>
                <input type="text" id="name" name="name" required>

                <label for="email">電子郵件：</label>
                <input type="email" id="email" name="email" required>

                <label for="subject">主旨：</label>
                <input type="text" id="subject" name="subject" required>

                <label for="message">消息內容：</label>
                <textarea id="message" name="message" rows="5" required></textarea>

                <button type="submit">提交</button>
            </form>
        </section>
    </div>
    @include('layouts.footer') <!-- 引入頁尾 -->

</body>
</html>
