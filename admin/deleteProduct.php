<?php
header('Location: admin.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete product</title>
</head>
<body>
    <a href="admin.php" style="text-decoration:none">Назад в админку</a><br><br>
    <?php
        //Подлючиться к БД
        include ('../db.php');

        //Обезопасить БД
        $id = (int)$_GET['id'];

        //Удалить, если id не пустое
        if(!empty($_GET['id'])) {
            $result = mysqli_query($link, "DELETE FROM product WHERE id = $id");
        }

        //Вывести сообщение об успешной операции, если нет переадресации
        if($result) {
            echo "Товар успешно удален из каталога";
        }

        mysqli_close($link);
    ?>
</body>
</html>