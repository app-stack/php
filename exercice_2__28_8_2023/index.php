<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tests Document</title>
</head>
<body>
<?php 

    echo "Exercice1";
    echo "<br>";
    // Créer 2 variables $a et $b qui ont pour valeur 12 et 10,
    $a =12 ;
    $b =10 ;

    // Stocker le résultat de l’addition de $a et $b dans une variable $total,
    echo "<br>";
    $total = ($a) + ($b);
    echo $total;
    echo "<br>";
    
    echo "<br>";
    echo "Exercice2";
    // Créer 3 variables $a, $b et $c qui ont pour valeur $a =5, $b =3 et $c = $a+$b
    $a =5;
    echo "<br>";
    echo $a;
    
    $b =3;
    echo "<br>";
    echo $b;

    // passer la valeur de $a à 2, -Afficher la valeur de $a,

    $c = $a + $b;
    echo "<br>";
    echo $c;
    echo "<br>";

    $a =2;
    echo "<br>";
    echo $a;
    echo "<br>";
    
    //passer la valeur de $c à $b - $a,
    $c = $b - $a;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo $c;

    // Exercice 3 :
// -Créer 2 variables $a et $b qui ont pour valeur 15 et 23,
// -Afficher la valeur de chaque variable (utilisez la fonction echo)., 
// -Intervertissez les valeurs de $a et $b,
// -Afficher la valeur de $a et $b (utilisez la fonction echo).

    echo "<br>";
    
    echo "<br>";
    echo "Exercice3";
    $a = 15;
    echo "<br>";
    echo "$a";

    $b = 23;
    echo "<br>";
    echo "$b";

    echo "<br>";
    $c = $a;
    $a = $b;
    $b = $c;
    echo "<br>";
    echo $a;
    echo "<br>";
    echo $b;
    
    



//  Exercice 4 :
// -Ecrire un programme qui prend le prix HT d’un article (de type float), 
// le nombre d’articles (de type integer) et le taux de TVA (de type float), 
// et qui fournit le prix total TTC (de type float) correspondant. 
// -Afficher le prix HT, le nbr d’articles et le taux de TVA (utilisez la fonction echo),
// -Afficher le résultat (utilisez la fonction echo).
    echo "<br>";
    
    echo "<br>";
    echo "Exercice4";
    $prixHT = 10.5;   
    $TVA = 20 / 100;
    $nbrArticles = 5;
    $tax = $prixHT * $TVA; 

    $TTC = $nbrArticles * ($prixHT + $tax);
    echo "<br>";
    echo $TTC;

    /*
    // Affichage dans la page web avec la fonction echo
    echo "<br>";
    echo $nbr ;
    echo "<br>";

     // Utilisation de la fonction gettype pour afficher le type de la variable
    echo gettype ($nbr);
    echo "<br>";
    */

    ?>


</body>
</html>