<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Exercice 1 :
    echo "Exercice1";
    // -Créer une variable $a qui a pour valeur « bonjour »,
    // -Afficher le nom de la variable et sa valeur.
    echo "<br>";
    echo "<br>";
    $a = "bonjour";
    echo "\$a";
    echo "<br>";
    echo "$a";
    echo "<br>";
    echo " le \"chat\"";echo "<br>";
    echo ' le "chat"';echo "<br>";
    echo 'j\'adore les chats';echo "<br>";
    echo "j'adore les chats";echo "<br>";
    echo "<br>";
    // $a = bonjour
    // $a = "bonjour"
    echo "\$a".'='.$a;
    echo "<br>";
    echo ' $a="bonjour" ';

    // Exercice 2 :
// -Créer 1 variable $a qui a pour valeur « bon »,
// -Créer 1 variable $b qui a pour valeur « jour »,
// -Créer 1 variable $c qui a pour valeur 10,
// -Concaténer $a, $b et $c + 1,
// -Afficher le résultat de la concaténation. 

    echo "<br>";
    $a = "bon";
    $b = "jour";
    $c = 10;
    $result = $a.$b.$c+1;
    echo $result;

    //Exercice 3 :
// -Créer une variable $a qui a pour valeur bonjour,
// -Afficher un paragraphe (balise html) et à l’intérieur la phrase suivante :
// l’adrar
// -Ajouter la variable $a avant la phase dans le paragraphe,
// -Cela doit donner :
//  <p>bonjour l’adrar</p> 

    ?>
</body>
</html>