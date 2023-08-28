<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP test Document</title>
</head>
<body>
    <?php 
    echo "<h1>Hello World</h1>";
    //Commentaire
    ?>
    <h2>
        <?php 
        /*
        Commentaires
        Sur 
        Plusieurs lignes

        php.exe -f chemin du fichier
        php.exe -a
        Interactive shell => Tu peux coder en direct dans le shell
        */
        echo "Welcome";
        ?>
    </h2>
    <?= "Welcome in PHP" ?>



    <?php 
    // Initialisation, Déclarer une variable
    $nbr =2 ;

    // Affichage dans la page web avec la fonction echo
    echo "<br>";
    echo $nbr ;
    echo "<br>";

     // Utilisation de la fonction gettype pour afficher le type de la variable
    echo gettype ($nbr);
    echo "<br>";
    ?>

<?php 
    // Initialisation, Déclarer une variable de type int avec pour valeur 5
    $nbr =5 ;

    // Affichage du contenu dans la page web avec la fonction echo
    echo $nbr ;
    

     // Utilisation de la fonction gettype pour afficher le type de la variable
    echo "<br>";
    echo gettype ($nbr);

    // Créer une variable de type string avec pour valeur mon prénom
    echo "<br>";
    $monPrenom ="Raymond" ;
    echo " ";

    // Affichage du contenu dans la page web avec la fonction echo
    echo $monPrenom ;

    echo "&nbsp";

    // Créer une variable de type booléen avec pour valeur false
    $monNomEstRaymond = False ;

    // Utilisation de la fonction gettype pour afficher le type de la variable
    echo "<br>";
    echo gettype ($monNomEstRaymond);
    ?>
</body>
</html>