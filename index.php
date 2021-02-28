<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
    $title = "Document";
    $heading = "Заголовок";
    ?>
    <meta charset="UTF-8 without BOM">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>

<body>

    <h1><?php echo $heading; ?></h1>

    <?php 
    $a = 5;
    $b = '05';
    var_dump($a == $b);                             
    // Почему true? Потому что это нестрогое сравнение. Переменная $a содержит целое число, а переменая $b — строку. Сравнивается значение, а не тип данных. 
    var_dump((int)'012345');                        
    // Почему 12345? 
    var_dump((float)123.0 === (int)123.0);          
    // Почему false? Потому что это срогое сравнение по типу данных. У этих значений разные типы данных.
    var_dump((int)0 === (int)'hello, world');       
    // Почему true? Потому что это срогое сравнение по типу данных. У этих значений одинаковые типы данных.
    ?>
    <br>


    
    <?php echo date("Y"); ?>


    
</body>

</html>