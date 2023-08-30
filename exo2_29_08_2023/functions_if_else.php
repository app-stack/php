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

    function positifNegatif ($a){
        if ($a > 0){
            echo "Le nombre $a est positif";
        }

        else if ($a < 0){
            echo "Le nombre $a est négatif";
        }

        else if ($a == 0){
            echo "Le nombre $a n'est ni positif, ni négatif";
        }
    }
    positifNegatif (5);
    echo "<br>";
    positifNegatif (-5);
    echo "<br>";
    positifNegatif (0);

    echo "<h1>Exercice 2</h1>";

    function plusGrand(int $a,int $b,int $c){
        if($a > $b && $a > $c){
            echo "Entre les nombres $a, $b et $c, le nombre $a est plus grand";
        }
        else if($b > $c){
            echo "Entre les nombres $a, $b et $c, le nombre $b est plus grand";
        }
        else{
            echo "Entre les nombres $a, $b et $c, le nombre $c est plus grand";
        }
    }
    plusGrand(18,15,22);
    echo "<br>";
    plusGrand(8,15,12);
    echo "<br>";
    plusGrand(38,35,52);

    echo "<h1>Exercice 3</h1>";

    function plusPetit(int $a, int $b, int $c){
        if($a < $b && $a < $c){
            echo "Entre les nombres $a, $b et $c, le nombre $a est le plus petit";
        }
        else if($b < $c){
            echo "Entre les nombres $a, $b et $c, le nombre $b est le plus petit";
        }
        else{
            echo "Entre les nombres $a, $b et $c, le nombre $c est le plus petit";
        }
    }
    plusPetit(5,-15,-8);
    echo "<br>";
    plusPetit(20,-35,-48);
    echo "<br>";
    plusPetit(10,-25,-38);


    echo "<h1>Exercice 4</h1>";

    function calculePrixFinal(float $prix){
        if($prix > 2000){
            $ristourne =$prix - ($prix *0.20);
            echo "Vous avez une ristourne de 20% sur produit de $prix € qui vous fait $ristourne €";
        }
        else if($prix > 1000){
            $ristourne = $prix - ($prix *0.10);
            echo "Vous avez une ristourne de 10% sur produit de $prix € qui vous fait $ristourne €";
        }
        else{
            echo "Vous n'avez pas de ristourne";
        }
    }
    calculePrixFinal(2500);
    echo "<br>";
    calculePrixFinal(1500);
    echo "<br>";
    calculePrixFinal(800);

    echo "<h1>Exercice 5</h1>";

    function anneeBissextile(int $x){
        
        if($x%400 == 0){
            echo "L’année $x est une année bissextile";
        }
        else if($x%100 == 0){
            echo "L’année $x n'est pas une année bissextile";
        }
        else if($x%4 == 0){
            echo "L’année $x est une année bissextile";
        }
        else{
            echo "L’année $x n'est pas une année bissextile";
        }
    } 
    anneeBissextile(400);
    echo "<br>";
    anneeBissextile(2000);
    echo "<br>";
    anneeBissextile(2023);
    echo "<br>";
    anneeBissextile(1066);
    echo "<br>";
    anneeBissextile(180);
    echo "<br>";
    anneeBissextile(1999);
    echo "<br>";
    anneeBissextile(0);
    echo "<br>";
    anneeBissextile(333358952);
    ?>
</body>
</html>