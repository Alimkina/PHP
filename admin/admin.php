<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>
    <?php
    //Подключиться к БД
    include ('../db.php');

    $result = mysqli_query($link, "SELECT * FROM product");
    if (!$result) {
        die($link);
    }
    //Кнопка на добавление товара
    echo "<a href=createProduct.php style=text-decoration:none>Добавить товар<br><br></a>";

    //Вывести список товаров
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div><img src=\"../{$row['adress']}\" width=300></div>";
        echo "{$row['product_name']}<br>";
        echo "{$row['price']} рублей<br><br>";
        echo "<a href=editProduct.php?id={$row['id']} style=text-decoration:none>Редактировать</a><br>";
        echo "<a href=deleteProduct.php?id={$row['id']} style=text-decoration:none>Удалить</a><br><br>";
    }

    mysqli_close($link);
    ?>
</body>
</html>