<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhà Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Quản Lý Nhà Hàng</h1>
</header>

<nav>
    <a href="login.php">Đăng Nhập</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">Ý kiến khách hàng</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Chào mừng bạn đến với hệ thống quản lý nhà hàng</h2>
    <p>Chọn một mục từ thanh điều hướng để bắt đầu quản lý nhà hàng.</p>
</div>

</body>
<style>
    /* General Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f0f4f8;
    color: #333;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.container {
    max-width: 900px;
    margin: 20px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Header */
header {
    width: 100%;
    background: linear-gradient(135deg, #4CAF50, #81C784);
    color: white;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

header h1 {
    margin: 0;
    font-size: 2.5em;
    font-weight: bold;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
}

/* Navigation */
nav {
    width: 100%;
    display: flex;
    justify-content: center;
    gap: 20px;
    background-color: #333;
    padding: 10px 0;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    background-color: #555;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s;
}

nav a:hover {
    background-color: #4CAF50;
    transform: scale(1.05);
}

/* Welcome Section */
.container h2 {
    font-size: 1.8em;
    margin-bottom: 10px;
    color: #4CAF50;
    font-weight: bold;
}

.container p {
    font-size: 1.2em;
    color: #666;
    line-height: 1.6;
}

/* Responsive Design */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
        gap: 10px;
    }

    nav a {
        padding: 8px;
        width: 90%;
        text-align: center;
    }

    .container {
        padding: 15px;
    }
}

</style>
</html>
