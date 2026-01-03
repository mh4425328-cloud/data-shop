<?php
include "db.php";
$id = $_GET['id']; // ناخد رقم المنتج من الرابط

// نجيب بيانات المنتج الحالي
$product = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM products WHERE id=$id")
);

// لو الفورم اتبعت بالتحديث
if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,
        "UPDATE products SET 
         name='$name',
         price='$price',
         quantity='$quantity'
         WHERE id=$id"
    );
    header("Location: index.php"); // بعد التعديل يرجع للصفحة الرئيسية
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <style>
        body{background:#0f172a;color:#fff;font-family:Arial;padding:20px;}
        inp
