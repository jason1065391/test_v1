<!-- resources\views\pages\home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React in Laravel with Vite</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <style>
      /* 基本樣式 */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      a {
        text-decoration: none;
        color: inherit;
      }

      ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
      }

      /* 標頭樣式 */
      header {
        background-color: #333;
        color: white;
        padding: 10px 0;
      }

      nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        flex-wrap: wrap;
      }

      .logo img {
        height: 50px;
      }

      nav ul {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
      }

      nav li {
        margin: 0 15px;
      }

      nav a {
        color: white;
        font-size: 16px;
        padding: 5px 10px;
        display: inline-block;
      }

      nav a:hover {
        background-color: #555;
        border-radius: 5px;
      }

      .dropdown-menu {
        display: none;
        position: absolute;
        background-color: white;
        color: black;
        border: 1px solid #ddd;
        border-radius: 5px;
        top: 100%;
        left: 0;
        min-width: 160px;
        z-index: 1000;
      }

      .dropdown-menu a {
        color: black;
        padding: 10px;
        display: block;
      }

      .dropdown-menu a:hover {
        background-color: #f1f1f1;
      }

      .dropdown-toggle:hover + .dropdown-menu {
        display: block;
      }

      .notification-btn, .member-center-btn {
        display: flex;
        align-items: center;
      }

      .badge {
        background-color: red;
        color: white;
        border-radius: 50%;
        padding: 2px 5px;
        font-size: 12px;
        margin-left: 5px;
      }

      /* 輪播圖樣式 */
      .carousel {
        position: relative;
        overflow: hidden;
      }

      .carousel-inner {
        display: flex;
        transition: transform 0.5s ease-in-out;
      }

      .carousel-item {
        min-width: 100%;
        box-sizing: border-box;
      }

      .carousel-item img {
        width: 100%;
        height: auto;
      }

      .carousel-caption {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: white;
        background: rgba(0, 0, 0, 0.5);
        padding: 10px;
        border-radius: 5px;
      }

      /* 內容區樣式 */
      .content {
        padding: 20px;
      }

      .search-bar {
        margin-bottom: 20px;
      }

      .search-bar form {
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .search-bar input[type="search"] {
        width: 80%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
      }

      .search-bar button {
        padding: 10px 15px;
        background-color: #333;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }

      .search-bar button:hover {
        background-color: #555;
      }

      /* 卡片樣式 */
      .card-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
      }

      .card {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        width: calc(50% - 20px); /* 每行兩個卡片，考慮到間距 */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        box-sizing: border-box;
        transition: transform 0.3s ease;
      }

      .card:hover {
        transform: scale(1.02);
      }

      .card img {
        width: 100%;
        height: auto;
      }

      .card-content {
        padding: 15px;
      }

      .card-content h3 {
        margin: 0 0 10px;
      }

      .card-content p {
        margin: 5px 0;
      }

      /* 頁腳樣式 */
      footer {
        background-color: #333;
        color: white;
        padding: 10px 0;
        text-align: center;
      }

      .footer-content ul {
        display: flex;
        justify-content: center;
        padding: 0;
      }

      .footer-content li {
        margin: 0 15px;
      }

      .footer-content a {
        color: white;
      }

      .footer-content a:hover {
        text-decoration: underline;
      }

      /* 響應式設計 */
      @media (max-width: 1200px) {
        nav ul {
          justify-content: center;
        }
      }

      @media (max-width: 992px) {
        .search-bar form {
          flex-direction: column;
          align-items: stretch;
        }

        .search-bar input[type="search"] {
          width: 100%;
          margin-bottom: 10px;
        }

        .search-bar button {
          width: 100%;
        }

        .carousel-caption {
          bottom: 10px;
          left: 10px;
          font-size: 14px;
        }

        .card-container {
          flex-direction: column;
          align-items: center;
        }

        .card {
          width: 100%;
        }
      }

      @media (max-width: 768px) {
        .logo img {
          height: 40px;
        }

        nav {
          flex-direction: column;
          align-items: flex-start;
        }

        nav ul {
          flex-direction: column;
          width: 100%;
        }

        nav li {
          margin: 10px 0;
        }

        .footer-content ul {
          flex-direction: column;
          align-items: center;
        }

        .footer-content li {
          margin: 5px 0;
        }
      }

      @media (max-width: 576px) {
        .carousel-caption {
          bottom: 5px;
          left: 5px;
          font-size: 12px;
        }

        .search-bar input[type="search"], .search-bar button {
          font-size: 14px;
          padding: 8px;
        }

        .card {
          width: 100%;
        }
      }


    </style>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <a href="index.html">
          <img src="logo.png" alt="Logo">
        </a>
      </div>
      <ul>
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">課程功能 <i class="fas fa-caret-down"></i></a>
          <ul class="dropdown-menu">
            <li><a href="teacher-list.html">找老師</a></li>
            <li><a href="student-case.html">找學生</a></li>
            <li><a href="teacher-resume.html">接案</a></li>
            <li><a href="student-find-teacher.html">發案</a></li>
          </ul>
        </li>
        <li>
          <a href="#" class="login-btn">登入/註冊</a>
        </li>
        <li>
          <a href="#" class="notification-btn">
            <i class="fas fa-bell"></i>
            <span class="badge">3</span>
          </a>
        </li>
        <li>
          <a href="member-center.html" class="member-center-btn">
            <i class="fas fa-user"></i>
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <section class="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="carousel-1.jpg" alt="Carousel 1">
        <div class="carousel-caption">
          <h2>找到理想的家教老師，提升您的學習效果！</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="carousel-2.jpg" alt="Carousel 2">
        <div class="carousel-caption">
          <h2>找到理想的家教老師，提升您的學習效果！</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="carousel-3.jpg" alt="Carousel 3">
        <div class="carousel-caption">
          <h2>找到理想的家教老師，提升您的學習效果！</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="search-bar">
      <form>
        <input type="search" placeholder="搜尋老師或學生案件">
        <button type="submit">
          <i class="fas fa-search"></i>
        </button>
      </form>
    </div>
    <div class="hot-teacher-list">
      <h2>熱門老師列表</h2>
      <ul>
        <li>
          <div class="teacher-card">
            <img src="teacher-1.jpg" alt="Teacher 1">
            <h3>Teacher 1</h3>
            <p>科目：數學</p>
            <p>評價：4.5/5</p>
            <p>價格：$500/h</p>
          </div>
        </li>
        <li>
          <div class="teacher-card">
            <img src="teacher-2.jpg" alt="Teacher 2">
            <h3>Teacher 2</h3>
            <p>科目：英文</p>
            <p>評價：4.8/5</p>
            <p>價格：$600/h</p>
          </div>
        </li>
        <li>
          <div class="teacher-card">
            <img src="teacher-3.jpg" alt="Teacher 3">
            <h3>Teacher 3</h3>
            <p>科目：物理</p>
            <p>評價：4.2/5</p>
            <p>價格：$400/h</p>

        </li>
        <li>
          <div class="teacher-card">
            <img src="teacher-4.jpg" alt="Teacher 4">
            <h3>Teacher 4</h3>
            <p>科目：化學</p>
            <p>評價：4.9/5</p>
            <p>價格：$700/h</p>
          </div>
        </li>
        <li>
          <div class="teacher-card">
            <img src="teacher-5.jpg" alt="Teacher 5">
            <h3>Teacher 5</h3>
            <p>科目：生物</p>
            <p>評價：4.6/5</p>
            <p>價格：$550/h</p>
          </div>
        </li>
      </ul>
    </div>
    <div class="hot-student-list">
      <h2>熱門學生列表</h2>
      <ul>
        <li>
          <div class="student-card">
            <img src="student-1.jpg" alt="Student 1">
            <h3>Student 1</h3>
            <p>科目：數學</p>
            <p>評價：4.5/5</p>
            <p>價格：$300/h</p>
          </div>
        </li>
        <li>
          <div class="student-card">
            <img src="student-2.jpg" alt="Student 2">
            <h3>Student 2</h3>
            <p>科目：英文</p>
            <p>評價：4.8/5</p>
            <p>價格：$400/h</p>
          </div>
        </li>
        <li>
          <div class="student-card">
            <img src="student-3.jpg" alt="Student 3">
            <h3>Student 3</h3>
            <p>科目：物理</p>
            <p>評價：4.2/5</p>
            <p>價格：$250/h</p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <footer>
    <div class="footer-content">
      <p>Copyright 2023 Home Tutor. All rights reserved.</p>
      <ul>
        <li><a href="#">關於我們</a></li>
        <li><a href="#">聯繫我們</a></li>
        <li><a href="#">使用條款</a></li>
      </ul>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js"></script>
</body>
</html>
</html>