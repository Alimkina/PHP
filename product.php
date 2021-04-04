<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <a href="catalog.php" style="text-decoration:none">Назад</a><br><br>
    <?php
    
    //Обратиться к БД
    if(!empty($_GET['id'])) {
        include ("db.php");
    }

    $result = mysqli_query($link, "SELECT * FROM product WHERE id = {$_GET['id']}");
        if (!$result) {
        die($link);
    }
    
    //Вывести продукт
    $row = mysqli_fetch_assoc($result);
    echo "<img src=\"{$row['adress']}\"><br>";
    echo "{$row['product_name']}<br>{$row['price']} рублей";
   
    mysqli_close($link);
    ?>
</body>
</html>