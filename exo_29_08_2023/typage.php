<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
            echo "<h1>Exercice 1</h1>";  
            echo "<br>";
            function substract(int|float $a, int|float $b):int|float
            {
                $result= $a - $b ;

                return $result ;
            }

            echo "Test de la soustraction de 7 - 4.3 (substract(7, 4.3)) = " . substract(7,4.3);
        ?>
</body>
</html>