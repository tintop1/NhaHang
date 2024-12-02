<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ý Kiến Khách Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Ý Kiến Khách Hàng</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">ý kiến khách hàng</a>
</nav>

<div class="container">
    <h2>Danh Sách Ý Kiến Khách Hàng</h2>
    <table>
        <tr>
            <th>Tên Khách Hàng</th>
            <th>Email</th>
            <th>Ý Kiến</th>
            <th>Thời Gian</th>
            <th>Thao Tác</th>
        </tr>
        <!-- Ví dụ ý kiến khách hàng -->
        <tr>
            <td>Nguyễn Văn B</td>
            <td>nguyenvanb@example.com</td>
            <td>Rất hài lòng với dịch vụ</td>
            <td>2024-11-05 18:45</td>
            <td>
                <button onclick="editFeedback()">Chỉnh sửa</button>
                <button onclick="confirmDelete()">Xóa</button>
            </td>
        </tr>
        <!-- Thêm các ý kiến khác ở đây -->
    </table>
</div>

<script>
function confirmDelete() {
    if (confirm("Bạn có chắc chắn muốn xóa ý kiến này không?")) {
        alert("Ý kiến đã được xóa!"); // Thông báo mẫu, không xóa thực tế
    }
}

function editFeedback() {
    alert("Chỉnh sửa ý kiến!"); // Chỉ là thông báo mẫu
}
</script>

</body>
<style>  /* General Styles */
* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f8fb;
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
    background: linear-gradient(135deg, #ff6f61, #ff8a65);
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
    background-color: #ff6f61;
    transform: scale(1.05);
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
    background-color: #ff6f61;
    color: white;
}

td {
    vertical-align: middle;
}

.menu-image {
    width: 60px;
    height: 60px;
    object-fit: cover;
    border-radius: 4px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
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
}
</style>
</html>
