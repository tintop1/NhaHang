<?php
// Đây chỉ là một trang logout đơn giản
session_start();
session_destroy(); // Hủy phiên làm việc
header("Location: index.php"); // Chuyển hướng về trang chính
exit();
?>
