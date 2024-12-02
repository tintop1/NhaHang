<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doanh Thu</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Doanh Thu</h1>
</header>

<nav>
    <a href="index.php">Trang Chủ</a>
    <a href="menu.php">Thực Đơn</a>
    <a href="reservation.php">Đặt Bàn</a>
    <a href="orders.php">Đơn Hàng</a>
    <a href="employees.php">Nhân viên</a>
    <a href="feedback.php">Ý kiến khách hàng</a>
    <a href="revenue.php">Doanh Thu</a>
</nav>

<div class="container">
    <h2>Thống Kê Doanh Thu</h2>
    
    <!-- Bộ lọc thời gian -->
    <div class="filter-section">
        <label>Xem theo:</label>
        <select id="timeFilter">
            <option value="day">Hôm nay</option>
            <option value="week">Tuần này</option>
            <option value="month">Tháng này</option>
            <option value="year">Năm này</option>
        </select>
        
        <label>Từ ngày:</label>
        <input type="date" id="startDate">
        
        <label>Đến ngày:</label>
        <input type="date" id="endDate">
        
        <button onclick="filterRevenue()" style="background-color: #4CAF50;">Lọc</button>
    </div>

    <!-- Tổng quan doanh thu -->
    <div class="revenue-summary">
        <div class="summary-card">
            <h3>Tổng Doanh Thu</h3>
            <p>15,000,000 VNĐ</p>
        </div>
        <div class="summary-card">
            <h3>Số Đơn Hàng</h3>
            <p>150</p>
        </div>
        <div class="summary-card">
            <h3>Trung Bình/Đơn</h3>
            <p>100,000 VNĐ</p>
        </div>
    </div>

    <!-- Bảng chi tiết doanh thu -->
    <table>
        <tr>
            <th>Ngày</th>
            <th>Số Đơn Hàng</th>
            <th>Doanh Thu</th>
            <th>Chi Phí</th>
            <th>Lợi Nhuận</th>
            <th>Thao Tác</th>
        </tr>
        <tr>
            <td>05/11/2024</td>
            <td>45</td>
            <td>4,500,000 VNĐ</td>
            <td>2,000,000 VNĐ</td>
            <td>2,500,000 VNĐ</td>
            <td>
                <button onclick="viewDetails()">Chi tiết</button>
                <button onclick="exportReport()">Xuất báo cáo</button>
            </td>
        </tr>
        <tr>
            <td>04/11/2024</td>
            <td>52</td>
            <td>5,200,000 VNĐ</td>
            <td>2,300,000 VNĐ</td>
            <td>2,900,000 VNĐ</td>
            <td>
                <button onclick="viewDetails()">Chi tiết</button>
                <button onclick="exportReport()">Xuất báo cáo</button>
            </td>
        </tr>
    </table>
</div>

<style>
/* Kế thừa các style từ trang gốc */
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
    max-width: 1200px;
    margin: 20px;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Header và Navigation kế thừa từ CSS cũ */
header {
    width: 100%;
    background: linear-gradient(135deg, #ff6f61, #ff8a65);
    color: white;
    padding: 20px 0;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
}

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

/* Styles mới cho trang doanh thu */
.filter-section {
    margin: 20px 0;
    padding: 15px;
    background-color: #f8f9fa;
    border-radius: 8px;
    display: flex;
    gap: 15px;
    align-items: center;
    flex-wrap: wrap;
}

.filter-section select,
.filter-section input {
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.revenue-summary {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin: 20px 0;
}

.summary-card {
    background: linear-gradient(135deg, #4CAF50, #45a049);
    color: white;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.summary-card h3 {
    margin-bottom: 10px;
    font-size: 1.2em;
}

.summary-card p {
    font-size: 1.5em;
    font-weight: bold;
}

/* Table styling kế thừa và mở rộng */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 15px;
    text-align: left;
    border: 1px solid #ddd;
}

th {
    background-color: #ff6f61;
    color: white;
}

/* Responsive Design */
@media (max-width: 768px) {
    .filter-section {
        flex-direction: column;
        align-items: stretch;
    }
    
    .revenue-summary {
        grid-template-columns: 1fr;
    }
    
    .summary-card {
        margin-bottom: 10px;
    }
    
    table {
        display: block;
        overflow-x: auto;
    }
}
</style>

<script>
function filterRevenue() {
    const timeFilter = document.getElementById('timeFilter').value;
    const startDate = document.getElementById('startDate').value;
    const endDate = document.getElementById('endDate').value;
    
    // Xử lý lọc doanh thu theo thời gian
    alert('Đang lọc doanh thu từ ' + startDate + ' đến ' + endDate);
}

function viewDetails() {
    alert('Xem chi tiết doanh thu');
}

function exportReport() {
    alert('Xuất báo cáo doanh thu');
}
</script>

</body>
</html>