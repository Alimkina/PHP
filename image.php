<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="lesson-5.php" style="text-decoration:none">Назад</a><br><br>
    <?php
    include ("db.php");
    //Обратиться к БД
    $result = mysqli_query($link, "SELECT * FROM image_gallery WHERE id = {$_GET['id']}");
        if (!$result) {
        echo mysqli_error($link);
    }
    //Вывести картинку
    $row = mysqli_fetch_assoc($result);
    echo "<img src=\"{$row['adress']}\"><br>";
    echo "Количество просмотров: {$row['views']}";

    //Количество просмотров
    $count = mysqli_query($link, "UPDATE image_gallery SET views = views + 1 WHERE id = {$_GET['id']}");

    mysqli_close($link);

    
     
    


   
 


    ?>
</body>
</html>