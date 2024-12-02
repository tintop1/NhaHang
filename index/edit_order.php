<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh Sửa Đơn Hàng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Chỉnh Sửa Đơn Hàng</h1>
    </header>

    <nav>
        <a href="index.php">Trang Chủ</a>
        <a href="menu.php">Thực Đơn</a>
        <a href="reservation.php">Đặt Bàn</a>
        <a href="orders.php">Đơn Hàng</a>
        <a href="employees.php">Nhân viên</a>
    </nav>

    <div class="container">
        <form id="order-form">
            <label for="orderId">Mã Đơn Hàng:</label>
            <input type="text" id="orderId" name="orderId" value="#001" readonly>

            <label for="customerName">Tên Khách Hàng:</label>
            <input type="text" id="customerName" name="customerName" value="Nguyễn Văn B">

            <label for="orderDate">Ngày Đặt Hàng:</label>
            <input type="date" id="orderDate" name="orderDate" value="2023-05-01">

            <label for="deliveryTime">Thời Gian Giao Hàng:</label>
            <input type="time" id="deliveryTime" name="deliveryTime" value="14:30">

            <label for="products">Sản Phẩm:</label>
            <table id="product-table">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Thành Tiền</th>
                        <th>Thao Tác</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Burger</td>
                        <td><input type="number" name="quantity[]" value="2"></td>
                        <td>50,000 VND</td>
                        <td>100,000 VND</td>
                        <td><button type="button" class="remove-product">Xóa</button></td>
                    </tr>
                    <tr>
                        <td>Pizza</td>
                        <td><input type="number" name="quantity[]" value="1"></td>
                        <td>100,000 VND</td>
                        <td>100,000 VND</td>
                        <td><button type="button" class="remove-product">Xóa</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" id="add-product">Thêm Sản Phẩm</button>

            <label for="paymentMethod">Phương Thức Thanh Toán:</label>
            <select id="paymentMethod" name="paymentMethod">
                <option value="cash">Tiền mặt</option>
                <option value="credit-card">Thẻ tín dụng</option>
                <option value="bank-transfer">Chuyển khoản</option>
            </select>

            <label for="deliveryAddress">Địa Chỉ Giao Hàng:</label>
            <textarea id="deliveryAddress" name="deliveryAddress">123 Đường ABC, Quận XYZ, TP.HCM</textarea>

            <label for="note">Ghi Chú:</label>
            <textarea id="note" name="note">Giao hàng cẩn thận</textarea>

            <label for="status">Trạng Thái Đơn Hàng:</label>
            <select id="status" name="status">
                <option value="pending">Chờ xử lý</option>
                <option value="processing">Đang giao hàng</option>
                <option value="delivered">Đã giao hàng</option>
                <option value="cancelled">Đã hủy</option>
            </select>

            <button type="submit">Cập Nhật</button>
            <button type="button" onclick="window.location.href='orders.php'">Hủy</button>
        </form>
    </div>

    <script>
        // Thêm sản phẩm vào bảng
        document.getElementById('add-product').addEventListener('click', function() {
            var table = document.getElementById('product-table');
            var row = table.insertRow(-1);
            row.innerHTML = `
                <td><input type="text" name="product[]"></td>
                <td><input type="number" name="quantity[]" value="1"></td>
                <td><input type="text" name="price[]"></td>
                <td></td>
                <td><button type="button" class="remove-product">Xóa</button></td>
            `;
        });

        // Xóa sản phẩm khỏi bảng
        document.querySelectorAll('.remove-product').forEach(function(button) {
            button.addEventListener('click', function() {
                this.parentNode.parentNode.remove();
            });
        });

        // Cập nhật tổng tiền
        document.getElementById('order-form').addEventListener('input', function() {
            var total = 0;
            document.querySelectorAll('#product-table input[name="quantity[]"], #product-table input[name="price[]"]').forEach(function(input, index) {
                var quantity = parseFloat(document.querySelectorAll('#product-table input[name="quantity[]"]')[index].value);
                var price = parseFloat(document.querySelectorAll('#product-table input[name="price[]"]')[index].value);
                var rowTotal = quantity * price;
                document.querySelectorAll('#product-table td:nth-child(4)')[index].textContent = rowTotal.toLocaleString() + ' VND';
                total += rowTotal;
            });
            document.getElementById('totalAmount').value = total.toLocaleString() + ' VND';
        });
    </script>
</body>
</html>