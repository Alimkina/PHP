<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- форма дла загрузки картинок в БД
    <form enctype="multipart/form-data" method="post" action="">
    <input type="file" name="path" title="Выберите файл">
    <input type="submit" value="Загрузить">
    <br><br>
</form> -->

<?php
//Загрузить файл, переместить в папку img
// if ($_FILES && $_FILES['path']['error'] == UPLOAD_ERR_OK) {
//     $file = "img/".$_FILES['path']['name'];
//     $name = $_FILES['path']['name'];
//     $size = $_FILES['size'];
//     move_uploaded_file($_FILES['path']['tmp_name'], $file);
// }

//Обратиться к БД, загрузить картинки
// $result = mysqli_query($link, "INSERT INTO image_gallery (image, adress) VALUES ('$name', '$file')");
// if (!$result) {
//     echo mysqli_error($link);
// }

//Обратиться к БД, выбрать картинки
include ("db.php");
$result = mysqli_query($link, "SELECT * FROM image_gallery ORDER BY views desc");
if (!$result) {
    echo mysqli_error($link);
}

//Вывести картинки
while ($row = mysqli_fetch_assoc($result)) {
    echo "<a href=\"image.php?id={$row['id']}\"><img src=\"{$row['adress']}\"></a>";
}

mysqli_close($link);


?>



</body>
</html>