<html>
    <head>
        <title>PHP - Exercices conditions</title>
    </head>
    <body>
        <h1>PHP - Exercices conditions</h1>
        <h2>Exercice 1</h2>
        <?php
            // Créer une fonction qui teste si un nombre est positif ou négatif
            function isPositif(int|float $a):bool
            {
                if ($a > 0) {
                    echo "Le nombre $a est positif.<br>";

                    return true;
                } else  {
                    if($a < 0) {
                        echo "Le nombre $a est négatif.<br>";
                    } else {
                        echo "Le nombre $a est nul.<br>";
                    }
                    return false;
                }
            }

            isPositif(100.5);
            isPositif(-32);
            isPositif(0);
        ?>

        <h2>Exercice 2</h2>
        <?php
            // Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus grand
            function getHighest(int|float $a, int|float $b, int|float $c):int|float
            {
                $highest = null;
                if ($a >= $b && $a >= $c) {
                    $highest = $a;
                } elseif ($b >= $a && $b >= $c) {
                    $highest = $b;
                } else {
                    $highest = $c;
                }

                return $highest;
            }

            echo "Plus grand nombre entre -5,7,4 : " . getHighest(-5, 7, 4) . "<br>";
            echo "Plus grand nombre entre 7,7,4 : " . getHighest(7, 7, 4) . "<br>";
            echo "Plus grand nombre entre -5,4,4 : " . getHighest(-5, 4, 4) . "<br>";
            echo "Plus grand nombre entre -5,4,4 : " . getHighest(-23, -2, -6) . "<br>";
        ?>

        <h2>Exercice 3</h2>
        <?php
            // Créer une fonction qui prend en entrée 3 valeurs et retourne le nombre le plus petit
            function getLowest(int|float $a, int|float $b, int|float $c):int|float
            {
                $lowest = null;
                if ($a <= $b && $a <= $c) {
                    $lowest = $a;
                } elseif ($b <= $a && $b <= $c) {
                    $lowest = $b;
                } else {
                    $lowest = $c;
                }

                return $lowest;
            }

            echo "Plus grand nombre entre -5,7,4 : " . getHighest(-5, 7, 4) . "<br>";
            echo "Plus grand nombre entre 7,7,4 : " . getHighest(7, 7, 4) . "<br>";
            echo "Plus grand nombre entre -5,4,4 : " . getHighest(-5, 4, 4) . "<br>";
            echo "Plus grand nombre entre -5,4,4 : " . getHighest(-23, -2, -6) . "<br>";
        ?>

        <h2>Exercice 4</h2>
        <?php
            /*
            - Créer une fonction calculePrixFinal qui prend en entrée un paramètre $prix de type float et retournera le prix final. 
            - Si le prix est > à 2000€, la ristourne sera de 20%
            - Si le prix est > à 1000€, la ristourne sera de 10%
            - Sinon, la ristourne sera de 0
            */
            function calculePrixFinal(int|float $prix):int|float
            {
                $ristourne = 1;
                if ($prix > 2000) {
                    $ristourne = 0.8;
                } elseif ($prix > 1000) {
                    $ristourne = 0.9;
                }

                return $prix * $ristourne;
            }

            echo "Prix avant ristourne : 499.99€ => après risourne : " . calculePrixFinal(499.99) . "<br>";
            echo "Prix avant ristourne : 1300€ => après risourne : " . calculePrixFinal(1300) . "<br>";
            echo "Prix avant ristourne : 2200€ => après risourne : " . calculePrixFinal(2200) . "<br>";
        ?>

        <h2>Exercice 5</h2>
        <?php
            /*
            - Créer une fonction qui prend en entrée 1 année (entier) et qui affiche « l’année x est une année bissextile » si l’année est bissextile 
            ou « l’année x n’est pas une année bissextile » si ce n’est pas une année bissextile
            
            - Pour rappel une année bissextile est définie de la façon suivante (https://fr.wikipedia.org/wiki/Ann%C3%A9e_bissextile)  : 
            - Les années sont en général bissextiles si elles sont multiples de quatre
            - elles ne sont pas bissextiles si elles sont multiples de cent à l'exception des années multiples de quatre cents qui le sont.
            */
            function isBissextile(int $annee):bool
            {
                if ($annee % 4 !== 0) {
                    return false;
                }

                if ($annee % 100 === 0 && $annee % 400 !== 0) {
                    return false;
                }

                return true; 
            }

            function isBissextileV2(int $annee):bool
            {
                if ($annee % 4 !== 0 || ($annee % 100 === 0 && $annee % 400 !== 0)) {
                    return false;
                }

                return true; 
            }

            function isBissextileV3(int $annee):bool
            {
                return (($annee % 4 === 0 && $annee % 100 !== 0) || $annee % 400 === 0);
            }

            $annees = [1900, 1904, 2152, 2200, 2400, 2020];

            foreach($annees as $annee) {
                echo "<h3>fonction isBissextile : </h3>";
                if (isBissextile($annee)) {
                    echo "l'annee $annee est bissextile <br>";
                } else {
                    echo "l'annee $annee n'est pas bissextile <br>";
                }

                echo "<h3>fonction isBissextileV2</h3>";
                if (isBissextileV2($annee)) {
                    echo "l'annee $annee est bissextile <br>";
                } else {
                    echo "l'annee $annee n'est pas bissextile <br>";
                }

                echo "<h3>fonction isBissextileV3</h3>";
                if (isBissextileV3($annee)) {
                    echo "l'annee $annee est bissextile <br>";
                } else {
                    echo "l'annee $annee n'est pas bissextile <br>";
                }
            }
        ?>
    </body>
</html>