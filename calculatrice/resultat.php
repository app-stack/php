<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST["Number_1"]) && isset($_POST["Number_2"]) && is_numeric($_POST["Number_1"]) && is_numeric ($_POST["Number_2"])) {
        $number_1 = (float)$_POST["Number_1"];
        $number_2 = (float)$_POST["Number_2"];
        $operator = $_POST["Math_operator"];
    }

    if ($operator == "+"){
        echo "Le résultat de l'opération"." ".$number_1." ".$operator." ".$number_2." est ". $number_1+$number_2;
    } elseif ($operator == "-"){
        echo "Le résultat de l'opération"." ".$number_1." ".$operator." ".$number_2." = ". $number_1-$number_2;
    } elseif ($operator == "*"){
        echo "Le résultat de l'opération"." ".$number_1." ".$operator." ".$number_2." est ". $number_1*$number_2;
    } elseif ($operator == "/"){
        echo "Le résultat de l'opération"." ".$number_1." ".$operator." ".$number_2." = ". $number_1/$number_2;
    } elseif ($operator == "%"){
        echo "Le résultat de l'opération"." ".$number_1." ".$operator." ".$number_2." est ". $number_1%$number_2;
    } else echo "Le calcul ne peut se faire";
    



    ?>
</body>
</html>