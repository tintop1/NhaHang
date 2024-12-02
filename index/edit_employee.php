<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Nhân Viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Chỉnh Sửa Nhân Viên</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <form>
        <label for="employeeName">Tên Nhân Viên:</label>
        <input type="text" id="employeeName" name="employeeName" value="Trần Văn A">

        <label for="position">Chức Vụ:</label>
        <input type="text" id="position" name="position" value="Quản lý">

        <label for="phone">Số Điện Thoại:</label>
        <input type="text" id="phone" name="phone" value="0123456789">

        <button type="submit">Cập Nhật</button>
        <button type="button" onclick="window.location.href='employees.php'">Hủy</button>
    </form>
</div>

</body>
</html>
