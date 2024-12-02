<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thực Đơn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Quản Lý Thực Đơn</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">Ý kiến khách hàng</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Danh Sách Thực Đơn</h2>
    <table id="menu-table">
        <thead>
            <tr>
                <th>Hình Ảnh</th>
                <th>Tên Món</th>
                <th>Giá</th>
                <th>Mô Tả</th>
                <th>Thao Tác</th>
            </tr>
        </thead>
        <tbody>
            <!-- Ví dụ món ăn -->
            <tr data-item-id="1">
                <td><img src="uploads/pho_bo.jpg" alt="Phở Bò" class="menu-image"></td>
                <td class="menu-name">Phở Bò</td>
                <td class="menu-price">50,000 VND</td>
                <td class="menu-description">Phở bò truyền thống Việt Nam</td>
                <td>
                    <button onclick="editMenuItem(1)">Chỉnh sửa</button>
                    <button onclick="deleteMenuItem(1)">Xóa</button>
                </td>
            </tr>
            <tr data-item-id="2">
                <td><img src="uploads/pho_ga.jpg" alt="Phở Gà" class="menu-image"></td>
                <td class="menu-name">Phở Gà</td>
                <td class="menu-price">40,000 VND</td>
                <td class="menu-description">Phở gà truyền thống Việt Nam</td>
                <td>
                    <button onclick="editMenuItem(2)">Chỉnh sửa</button>
                    <button onclick="deleteMenuItem(2)">Xóa</button>
                </td>
            </tr>
            <tr data-item-id="3">
                <td><img src="uploads/bun_ca.jpg" alt="Bún Cá" class="menu-image"></td>
                <td class="menu-name">Bún Cá</td>
                <td class="menu-price">45,000 VND</td>
                <td class="menu-description">Bún cá truyền thống Việt Nam</td>
                <td>
                    <button onclick="editMenuItem(3)">Chỉnh sửa</button>
                    <button onclick="deleteMenuItem(3)">Xóa</button>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    function editMenuItem(id) {
        // Chuyển hướng đến trang chỉnh sửa với tham số id
        window.location.href = `edit_menu.php?id=${id}`;
    }

    function deleteMenuItem(id) {
        // Xử lý xóa món ăn với tham số id
        if (confirm('Bạn có chắc chắn muốn xóa món ăn này?')) {
            // Gửi request xóa món ăn đến server
            fetch(`/api/menu-items/${id}`, {
                method: 'DELETE'
            })
            .then(response => {
                if (response.ok) {
                    // Xóa dòng tương ứng trong bảng
                    const row = document.querySelector(`#menu-table tr[data-item-id="${id}"]`);
                    row.remove();
                    alert('Xóa món ăn thành công!');
                } else {
                    alert('Có lỗi xảy ra khi xóa món ăn. Vui lòng thử lại!');
                }
            })
            .catch(error => {
                console.error('Lỗi khi xóa món ăn:', error);
                alert('Có lỗi xảy ra khi xóa món ăn. Vui lòng thử lại!');
            });
        }
    }
</script>

</body>
</html>
<style>
    /* General Styles */
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
