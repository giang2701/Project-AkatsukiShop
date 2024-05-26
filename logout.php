<!-- logout.php -->
<?php
session_start();
// Hủy phiên đăng nhập và chuyển hướng về trang đăng nhập
session_destroy();
header("Location: index.php?act=dangnhap");
exit();
?>
