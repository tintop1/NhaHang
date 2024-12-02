<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
</head>
<body>
    <header>
        <h1>Đăng Nhập</h1>
    </header>

    <div class="container">
        <form action="login.php" method="POST">
            <label for="username">Tên Người Dùng:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Mật Khẩu:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Đăng Nhập</button>
        </form>
        <p>Quên mật khẩu? <a href="xuly_quenmatkhau.php">Quên tên đăng nhập hoặc mật khẩu</a></p>
    </div>

    <?php
    session_start();

    // Hiển thị thông báo lỗi nếu có
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 1) {
            echo '<div class="error-message" style="color: red; text-align: center;">Sai tên đăng nhập hoặc mật khẩu!</div>';
        }
    }
    ?>
</body>
<style>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            min-height: 100vh;
        }

        header {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 1rem 0;
            text-align: center;
        }

        header h1 {
            color: white;
            font-size: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        nav {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 1rem;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav a {
            color: #333;
            text-decoration: none;
            padding: 0.5rem 1rem;
            margin: 0 0.5rem;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        nav a:hover {
            background-color: #3498db;
            color: white;
        }

        .container {
            max-width: 400px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input {
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }

        button {
            background-color: #3498db;
            color: white;
            padding: 0.8rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            text-align: center;
            margin-top: 1rem;
            color: #666;
        }

        p a {
            color: #3498db;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 480px) {
            .container {
                margin: 1rem;
                padding: 1rem;
            }

            header h1 {
                font-size: 1.5rem;
            }

            nav a {
                display: inline-block;
                margin: 0.25rem;
            }
        }
    </style>
</html>


<?php
// Kết nối cơ sở dữ liệu
$conn = mysqli_connect('localhost', 'root', '', 'quanlynhahang');

if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}

// Xử lý đăng nhập khi form được gửi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Truy vấn kiểm tra tài khoản
    $query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        // Đăng nhập thành công
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_user'] = $username;
        header("Location: index.php");
        exit();
    } else {
        // Đăng nhập thất bại
        header("Location: login.php?error=1");
        exit();
    }
}
?>
