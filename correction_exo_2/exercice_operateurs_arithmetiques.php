<html>
    <head>
        <title>PHP - Exercices opérateurs arithmétiques</title>
    </head>
    <body>
        <h1>PHP - Exercices opérateurs arithmétiques</h1>
        <h2>Exercice 1</h2>
        <?php
            $a = 12;
            $b = 10;
            $total = $a + $b;
            echo "Le total de $a + $b = $total";
        ?>
        <h2>Exercice 2</h2>
        <?php
            $a = 5;
            $b = 3;
            $c = $a + $b;
            echo "La variable \$a vaut $a <br>";
            echo "La variable \$b vaut $b <br>";
            echo "La variable \$c vaut $c <br>";
            
            $a = 2;
            echo "\$a = 2<br>";
            echo "La variable \$a vaut $a <br>";

            $c = $b - $a;
            echo "\$c = \$b - \$a;<br>";
            echo "La variable \$a vaut $a <br>";
            echo "La variable \$b vaut $b <br>";
            echo "La variable \$c vaut $c <br>";
        ?>
        <h2>Exercice 3</h2>
        <?php
            $a = 15;
            $b = 23;
            echo "La variable \$a vaut $a <br>";
            echo "La variable \$b vaut $b <br>";

            $temp = $a;
            $a = $b;
            $b = $temp;
            echo "La variable \$a vaut $a <br>";
            echo "La variable \$b vaut $b <br>";
        ?>
        <h2>Exercice 4</h2>
        <?php
            $prixHT = 25.0;
            $qte = 42;
            $tva = 19.0;
            $total = $prixHT * (1 + $tva/100) * $qte;

            echo "La TVA est de $tva%. Le prix total TTC de $qte articles au prix hors taxe de $prixHT est $total";
        ?>
    </body>
</html>