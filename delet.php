<?php
include "db.php";
$id = $_GET['id']; // ناخد رقم المنتج من الرابط

// حذف المنتج
mysqli_query($conn, "DELETE FROM products WHERE id=$id");

// بعد الحذف يرجع للصفحة الرئيسية
header("Location: index.php");
exit;
?>
