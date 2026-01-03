<?php
include "db.php";

$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $result = mysqli_query($conn, "SELECT * FROM products WHERE name LIKE '%$search%'");
} else {
    $result = mysqli_query($conn, "SELECT * FROM products");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Shop Products</title>
    <style>
        body{background:#0f172a;color:#fff;font-family:Arial;padding:20px;}
        h2{margin-bottom:20px;}
        table{width:100%;border-collapse:collapse;background:#020617;}
        th, td{padding:12px;border-bottom:1px solid #1e293b;text-align:left;}
        th{background:#020617;}
        a{color:#38bdf8;text-decoration:none;margin-right:8px;}
        .btn{display:inline-block;background:#1e293b;padding:10px 15px;margin-bottom:10px;text-decoration:none;color:#fff;}
        .btn:hover{background:#334155;}
        input[type="text"]{padding:8px;width:200px;}
        button{padding:8px 12px;background:#38bdf8;border:none;color:#000;cursor:pointer;}
        button:hover{background:#0ea5e9;color:#fff;}
        form.search-form{display:inline-block;margin-right:10px;}
    </style>
</head>
<body>

<h2>Products List</h2>

<!-- Search Form -->
<form class="search-form" method="GET" action="">
    <input type="text" name="search" placeholder="Search by name" value="<?= htmlspecialchars($search) ?>">
    <button type="submit">Search</button>
</form>

<a class="btn" href="add.php">Add Product</a>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
    </tr>

    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['name'] ?></td>
        <td><?= $row['price'] ?></td>
        <td><?= $row['quantity'] ?></td>
        <td>
            <a href="show.php?id=<?= $row['id'] ?>">show</a>
            <a href="edit.php?id=<?= $row['id'] ?>">edit</a>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('متأكد من الحذف؟')">delete</a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>