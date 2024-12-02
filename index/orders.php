<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đơn Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Quản Lý Đơn Hàng</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">Ý kiến khách hàng</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Danh Sách Đơn Hàng</h2>
    <table>
        <tr>
            <th>Mã Đơn Hàng</th>
            <th>Tên Khách Hàng</th>
            <th>Tổng Tiền</th>
            <th>Thao Tác</th>
        </tr>
        <!-- Ví dụ đơn hàng -->
        <tr>
            <td>#001</td>
            <td>Nguyễn Văn B</td>
            <td>200,000 VND</td>
            <td>
                <button onclick="window.location.href='edit_order.php'">Chỉnh sửa</button>
                <button onclick="confirmDelete()">Xóa</button>
            </td>
        </tr>
        <!-- Thêm các đơn hàng khác ở đây -->
    </table>
</div>

<script>
function confirmDelete() {
    if (confirm("Bạn có chắc chắn muốn xóa đơn hàng này không?")) {
        // Xử lý xóa đơn hàng (có thể điều hướng đến một trang xóa)
        alert("Đơn hàng đã được xóa!"); // Chỉ là thông báo mẫu, không xóa thực tế
    }
}
</script>

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
    background-color: #f9fbfd;
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
   

</style>
</html>
