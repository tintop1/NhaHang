<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Món Ăn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Chỉnh Sửa Món Ăn</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Chỉnh Sửa Thông Tin Món Ăn</h2>
    <form>
        <label for="name">Tên Món:</label>
        <input type="text" id="name" name="name" value="Phở Bò" required>

        <label for="price">Giá:</label>
        <input type="text" id="price" name="price" value="50,000 VND" required>

        <label for="description">Mô Tả:</label>
        <textarea id="description" name="description" required>Phở bò truyền thống Việt Nam</textarea>

        <button type="submit">Cập Nhật</button>
        <button type="button" onclick="location.href='menu.php'">Hủy</button>
    </form>
</div>

</body>
</html>
