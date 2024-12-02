<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Nhân Viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Quản Lý Nhân Viên</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="feedback.php">ý kiến khách hàng</a>
</nav>

<div class="container">
    <h2>Danh Sách Nhân Viên</h2>
    
    <!-- Add Employee Form -->
    <h3>Thêm Nhân Viên Mới</h3>
    <form action="add_employee.php" method="POST">
        <label for="full_name">Họ và Tên:</label>
        <input type="text" id="full_name" name="full_name" required><br>

        <label for="gender">Giới Tính:</label>
        <select id="gender" name="gender" required>
            <option value="Nam">Nam</option>
            <option value="Nữ">Nữ</option>
            <option value="Khác">Khác</option>
        </select><br>

        <label for="birth_date">Ngày Tháng Năm Sinh:</label>
        <input type="date" id="birth_date" name="birth_date" required><br>

        <label for="hometown">Quê Quán:</label>
        <input type="text" id="hometown" name="hometown" required><br>

        <label for="position">Chức Vụ:</label>
        <input type="text" id="position" name="position" required><br>

        <label for="phone">Số Điện Thoại:</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required><br>

        <label for="cccd">CCCD:</label>
        <input type="text" id="cccd" name="cccd" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <button type="submit">Thêm Nhân Viên</button>
    </form>

    <h2>Danh Sách Nhân Viên</h2>
    <table>
        <tr>
            <th>Họ và Tên</th>
            <th>Giới Tính</th>
            <th>Ngày Tháng Năm Sinh</th>
            <th>Quê Quán</th>
            <th>Chức Vụ</th>
            <th>Số Điện Thoại</th>
            <th>CCCD</th>
            <th>Email</th>
            <th>Thao Tác</th>
        </tr>
        <!-- Ví dụ nhân viên -->
        <tr>
            <td>Trần Văn A</td>
            <td>Nam</td>
            <td>01/01/1990</td>
            <td>Hà Nội</td>
            <td>Quản lý</td>
            <td>0123456789</td>
            <td>123456789</td>
            <td>tranvana@example.com</td>
            <td>
                <button onclick="window.location.href='edit_employee.php'">Chỉnh sửa</button>
                <button onclick="confirmDelete()">Xóa</button>
            </td>
        </tr>
        <!-- Thêm các nhân viên khác ở đây -->
    </table>
</div>

<script>
function confirmDelete() {
    if (confirm("Bạn có chắc chắn muốn xóa nhân viên này không?")) {
        // Xử lý xóa nhân viên (có thể điều hướng đến một trang xóa)
        alert("Nhân viên đã được xóa!"); // Chỉ là thông báo mẫu, không xóa thực tế
    }
}
</script>

</body>
<style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Header */
header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
}

header h1 {
    margin: 0;
    font-size: 2em;
}

/* Navigation */
nav {
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
    transition: background-color 0.3s;
}

nav a:hover {
    background-color: #555;
}

/* Add Employee Form */
form {
    margin-bottom: 30px;
    padding: 20px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
}

form label {
    margin-bottom: 5px;
    font-weight: bold;
}

form input,
form select,
form button {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 1em;
}

form button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
    font-weight: bold;
}

form button:hover {
    background-color: #45a049;
}

/* Employee Table */
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
}

th {
    background-color: #4CAF50;
    color: white;
}

td button {
    padding: 8px 12px;
    margin: 0 5px;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    font-size: 0.9em;
}

td button:hover {
    opacity: 0.9;
}

td button:first-child {
    background-color: #2196F3; /* Edit button */
}

td button:last-child {
    background-color: #f44336; /* Delete button */
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 15px;
    }

    nav {
        flex-direction: column;
    }

    table, form {
        font-size: 0.9em;
    }
}

</style>
</html>
