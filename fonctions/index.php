<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "PHP";

    function substract ($a, $b){
        $result = $a - $b;
        return $result;
    }
    $result = substract(25, 12);
    echo $result;

    echo "<br>";
    echo "Exercice 2";  
    // -Créer une fonction qui prend en entrée un nombre à virgule (float),
    // - la fonction doit retourner l’arrondi (return) du nombre en entrée (utiliser une fonction interne au langage).
    
    function numRound ($nombre){
        // round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float;
        echo "<br>";
        echo round($nombre);
        echo "<br>";
        echo round($nombre, 0, PHP_ROUND_HALF_UP);
        echo "<br>";
        echo round($nombre, 1, PHP_ROUND_HALF_DOWN);
        echo "<br>";
        echo round($nombre, 0, PHP_ROUND_HALF_DOWN);
        echo "<br>";

        return round($nombre);
    }
    $nombreArrondi = numRound(9.50);

    echo "\$nombreArrondi = $nombreArrondi <br>";

    // $a =5;
    // echo "<br>";
    // echo $a;
    
    // $b =3;
    // echo "<br>";
    // echo $b;

    ?>

    
</body>
</html>