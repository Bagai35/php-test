<?php
include './func.php';
include './month.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1>HI!</h1>
    <?php
    $var = 'Боб';
    $Var = 'Джо';
    echo "$var, $Var"; 
    ?> -->

    <?php
    $total = 0;
    echo "Enter simple number from 1 to 1000";
    for ($num = 0; $num<=1000; $num++){
        if($num%3 === 0){
            // echo $num . '<br>';
            simple_num($num);
            $total += $num;
        }
    };

    echo "Total ".$total;
    // die;
    $arResults = SetMonth(31, 'Neljapaev');
    // print_r($arResults);
    pr($arResults);
    // var_dump($arResults);
    ?>

</body>
</html>