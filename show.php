<?php
include "db.php";
$id = $_GET['id']; // ناخد رقم المنتج من الرابط

// نجيب بيانات المنتج
$product = mysqli_fetch_assoc(
    mysqli_query($conn, "SELECT * FROM products WHERE id=$id")
);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
        body{background:#0f172a;color:#fff;font-family:Arial;padding:20px;}
        .container{max-width:400px;margin:auto;background:#020617;padding:20px;border-radius:8px;}
        a{color:#38bdf8;text-decoration:none;}
        h3{margin-bottom:15px;}
        p{margin:8px 0;}
    </style>
</head>
<body>

<div class="container">
    <h3>Product Details</h3>
    <p><strong>ID:</strong> <?= $product['id'] ?></p>
    <p><strong>Name:</strong> <?= $product['name'] ?></p>
    <p><strong>Price:</strong> <?= $product['price'] ?></p>
    <p><strong>Quantity:</strong> <?= $product['quantity'] ?></p>
    <br>
    <a href="index.php">Back to Products List</a>
</div>

</body>
</html>
