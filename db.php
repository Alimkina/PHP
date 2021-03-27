<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if (!empty($_GET['id'])) {
        $link = mysqli_connect("localhost:3307", "root", "root", "gallery");
    }
    if (!$link) {
        die (mysqli_connect_error($link));
    }

    //добавить запрос на выбор SELECT

    ?>
</body>
</html>