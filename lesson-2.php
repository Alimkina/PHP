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
    //Задание 1
    $a = (int) 5;
    $b = (int) -7;

    if ($a >= 0 && $b >= 0) {
        echo ($a - $b);
    } 
    if ($a < 0 && $b < 0) { 
        echo ($a * $b);
    } 
    if ($a < 0 && $b >= 0 || $a >= 0 && $b <0) {
        echo ($a + $b);
    }

    echo "<br>"; echo "<br>";
    
    //Задание 2
    $a = rand(0, 15);
    switch ($a) {
        case 0:
            echo 0;
        case 1:
            echo 1;
        case 2:
            echo 2;
        case 3:
            echo 3;
        case 4:
            echo 4;
        case 5:
            echo 5;
        case 6:
            echo 6;
        case 7:
            echo 7;
        case 8:
            echo 8;
        case 9:
            echo 9;
        case 10:
            echo 10;
        case 11:
            echo 11;
        case 12:
            echo 12;
        case 13:
            echo 13;
        case 14:
            echo 14;
        case 15:
            echo 15;        
    }

    echo "<br>"; echo "<br>";

    //Задание 3
    function plus($a, $b) 
    {
        return $a + $b;
    }

    function minus($a, $b) 
    {
        return $a - $b;
    }

    function multiplication($a, $b) 
    {
        return $a * $b;
    }

    function segmentation($a, $b)
    {
        return $a / $b;
    }

    echo plus(2, 3); echo "<br>";
    echo minus(10, 1); echo "<br>";
    echo multiplication(3, 4); echo "<br>";
    echo segmentation(20, 5); echo "<br>"; echo "<br>";

    //Задание 4
    function mathOperation($arg1, $arg2, $operation) {
        switch ($operation) {
            case 'addition':
                echo $arg1 + $arg2;
                break;
            case 'subtraction':
                echo $arg1 - $arg2;
                break;
            case 'multiplication':
                echo $arg1 * $arg2;
                break;
            case 'segmentation':
                echo $arg1 / $arg2;
                break;
        }
    }
    
    echo mathOperation (1, 2, 'addition'); echo "<br>";
    echo mathOperation (2, 1, 'subtraction'); echo "<br>";
    echo mathOperation (2, 8, 'multiplication'); echo "<br>";
    echo mathOperation (8, 2, 'segmentation'); echo "<br>"; echo "<br>";

?>

<footer>
<!--Задание 5-->
<?php echo date("Y"); ?>
</footer>
</body>

</html>