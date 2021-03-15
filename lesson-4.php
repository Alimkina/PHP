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

$dir = 'img';
$images = scandir($dir);
echo "<br><br>";

//Вывести картинки
foreach ($images as $image) {
    if (!in_array($image,array(".",".."))) {
       ?><a href="/img/<?php echo $image?>" target="_blank"><?php echo "<img src=\"img/" . $image . "\" width=450px>";?></a><?php
    }
}

echo "<br><br>";

//Загрузить файл
if ($_FILES && $_FILES['file_name']['error'] == UPLOAD_ERR_OK) {
    $file = "img/".$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'], $file);
}

?>

<form enctype="multipart/form-data" method="post" action="">
    <input type="file" name="path" title="Выберите файл">
    <input type="submit" value="Загрузить">
</form>

</body>
</html>