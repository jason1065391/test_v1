<!-- resources\views\test.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React in Laravel with Vite</title>
    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/ReactTest.jsx']) <!-- 更新這裡的文件名 -->
</head>
<body>
    <h1>123</h1>
    <div id="main-container"></div>
</body>
</html>