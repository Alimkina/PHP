<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog</title>
</head>
<body>
    <h1>Каталог товаров</h1>
<?php
//Обратиться к БД, выбрать товары
include ("db.php");
$result = mysqli_query($link, "SELECT * FROM product");
if (!$result) {
    die($link);
}

//Вывести товары в миниатюре
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div><a href=\"product.php?id={$row['id']}\"><img src=\"{$row['adress']}\" width=250></a></div>";
    echo "{$row['product_name']}<br>";
    echo "{$row['price']} рублей<br><br>";
}

mysqli_close($link);
?>
</body>
</html>