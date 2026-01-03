<?php
include "db.php";

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    mysqli_query($conn,
        "INSERT INTO products (name, price, quantity)
         VALUES ('$name', '$price', '$quantity')");
    header("Location: index.php"); // بعد الإضافة يرجع للصفحة الرئيسية
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body{background:#0f172a;color:#fff;font-family:Arial;padding:20px;}
        input, button{padding:10px;margin:5px 0;width:100%;}
        button{background:#38bdf8;color:#000;border:none;cursor:pointer;}
        button:hover{background:#0ea5e9;color:#fff;}
        a{color:#38bdf8;text-decoration:none;}
        .container{max-width:400px;margin:auto;background:#020617;padding:20px;border-radius:8px;}
    </style>
</head>
<body>

<div class="container">
    <h2>Add New Product</h2>
    <form method="POST">
        <input name="name" placeholder="Product Name" required><br>
        <input name="price" type="number" step="0.01" placeholder="Price" required><br>
        <input name="quantity" type="number" placeholder="Quantity" required><br>
        <button>Add Product</button>
    </form>
    <br>
    <a href="index.php">Back to Products List</a>
</div>

</body>
</html>
