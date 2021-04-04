<?php
header($_SERVER['HTTP_HOST']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <a href="admin.php" style="text-decoration:none">Назад в админку</a>
    <h1>Добавить новый товар в каталоог</h1>
    <?php

    //Подключиться к БД
    include ('../db.php');

    //Загрузить файл, переместить в папку img (название картинки и ее местоположение)
    if ($_FILES && $_FILES['file_name']['error'] == UPLOAD_ERR_OK) {
        $file = "img/".$_FILES['file_name']['name'];
        $image = $_FILES['file_name']['name'];
        move_uploaded_file($_FILES['file_name']['tmp_name'], $file);
    }

    //Имя и цена, которую ввел администратор. Обезопасить БД
    $name = $_POST['product_name'];
    $name = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($name)));
    $price = $_POST['price'];
    $price = mysqli_real_escape_string($link, (int)htmlspecialchars(strip_tags($price)));

    //Обратиться к БД, загрузить товары
    $result = mysqli_query($link, "INSERT INTO product (`image`, adress, product_name, price) VALUES ('$image', '$file', '$name', '$price')");
    if (!$result) {
        die(mysqli_error($link));
    }

    mysqli_close($link);

    ?>
    <!-- Форма дла загрузки товаров в БД -->
    <br><br>
    <form enctype="multipart/form-data" method="post" action="">
    <input type="file" name="file_name" title="Выберите файл">
    <input type="text" name="product_name" placeholder="Название">
    <input type="text" name="price" placeholder="Цена">
    <input type="submit" value="Загрузить">
    <br><br>
</form>
</body>
</html>