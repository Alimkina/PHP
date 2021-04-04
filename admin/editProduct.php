<?php
header($_SERVER['HTTP_HOST']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product</title>
</head>
<body>
<h1>Отредактируйте товар</h1>
    <?php
    //Подключиться к БД
    include ('../db.php'); 

    //Вывести текущие значения
    $id = (int)$_GET['id'];
    $result = mysqli_query($link, "SELECT * FROM product WHERE id = $id");
    
    $row = mysqli_fetch_assoc($result); 
    echo "<div><img src=\"../{$row['adress']}\"></div><br>";
    ?>
    <form enctype="multipart/form-data" method="post" action="">
        <input type="hidden" name="id" value="<?= $id ?>">
        <input type="text" name="product_name" value="<?= $row['product_name'] ?>">
        <input type="text" name="price" value="<?= $row['price'] ?>">
        <input type="file" name="file" title="Выберите новое изображение">
        <input type="submit" value="Изменить">
    </form>
   <?php
    //Получить безопасные данные из формы 
    $name = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['product_name'])));
    $price = mysqli_real_escape_string($link, htmlspecialchars(strip_tags($_POST['price'])));
    
    //Загрузить файл, переместить в папку img
    if ($_FILES && $_FILES['file']['error'] == UPLOAD_ERR_OK) {
        $file = "../img/".$_FILES['file']['name'];
        $image = $_FILES['file']['name'];
        move_uploaded_file($_FILES['file']['tmp_name'], $file);
    }

    //Обновить значения в БД
    $update = mysqli_query($link, "UPDATE gallery.product SET product_name = '$name', price = '$price', adress = '$file' WHERE id = $id");

    if ($update) {
        echo "<br>Изменения выполнены.<br>";
    }

    mysqli_close($link);
    ?>
    <br>
    <a href="admin.php" style="text-decoration:none">Назад в админку</a>
</body>
</html>