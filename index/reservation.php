<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đặt Bàn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Quản Lý Đặt Bàn</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">Ý kiến khách hàng</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Không Gian Nhà Hàng</h2>
    <div class="reservation-image">
        <img src="images/nhahang.jpg" alt="Không gian nhà hàng">
    </div>

    <h2>Danh Sách Đặt Bàn</h2>
    <table>
        <tr>
            <th>Tên Khách Hàng</th>
            <th>Số Điện Thoại</th>
            <th>Thời Gian Đặt</th>
            <th>Số Người</th>
            <th>Thao Tác</th>
        </tr>
        <!-- Ví dụ đặt bàn -->
        <tr>
            <td>Nguyễn Văn A</td>
            <td>0123456789</td>
            <td>2024-11-05 19:00</td>
            <td>4</td>
            <td><button>Chỉnh sửa</button> <button>Xóa</button></td>
        </tr>
    </table>
</div>

</body>
<style>/* General Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f3f6fa;
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
    background: linear-gradient(135deg, #3f51b5, #5c6bc0);
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
    gap: 15px;
    background-color: #333;
    padding: 10px 0;
}

nav a {
    color: white;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 4px;
    background-color: #555;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s;
}

nav a:hover {
    background-color: #3f51b5;
    transform: scale(1.05);
}

/* Reservation Image */
.reservation-image {
    margin: 20px 0;
    text-align: center;
}

.reservation-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
}

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table, th, td {
    border: 1px solid #ddd;
}

th, td {
    padding: 15px;
    text-align: left;
    font-size: 1em;
}

th {
    background-color: #3f51b5;
    color: white;
}

td {
    vertical-align: middle;
}

/* Buttons in Table */
button {
    padding: 8px 12px;
    margin: 0 5px;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9em;
    font-weight: bold;
    transition: background-color 0.2s ease;
}

button:hover {
    opacity: 0.9;
}

button:first-child {
    background-color: #4CAF50; /* Edit button */
}

button:last-child {
    background-color: #f44336; /* Delete button */
}

/* Responsive Design */
@media (max-width: 768px) {
    nav {
        flex-direction: column;
    }

    nav a {
        padding: 8px;
        width: 90%;
        text-align: center;
    }

    table, th, td {
        font-size: 0.9em;
    }

    .container {
        padding: 15px;
    }

    .reservation-image img {
        max-width: 100%;
        height: auto;
    }
}
</style>
</html>
