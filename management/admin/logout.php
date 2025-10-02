<?php
session_start();        // Bắt đầu session
session_unset();        // Xóa toàn bộ biến session
session_destroy();      // Hủy session

header("Location: ../../UI/login/login.php"); // Chuyển về trang login
exit;
?>