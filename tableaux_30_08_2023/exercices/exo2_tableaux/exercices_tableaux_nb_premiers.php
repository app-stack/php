<html>
    <head>
        <title>PHP - Exercices tableaux nombres premiers</title>
    </head>
    <body>
        <h1>PHP - Exercices tableaux nombres premiers</h1>
        <h2>Exercice 1</h2>
        <?php
            /*
            - A l’aide de la fonction « range » créez un tableau contenant tous les nombres de 0 à 1000.
            - Parcourez le tableau et extrayez tous les nombres premiers dans un autre tableau (un nombre premier n’est divisible que par 1 et par lui-même).
            - Affichez les nombres premiers ainsi obtenus dans une liste HTML (<ul><li>). 
            */

            function isPremier(int $nb):bool
            {
                if ($nb < 2) {
                    return false;
                }

                for ($i = 2; $i < $nb; $i++) {
                    if ($nb % $i === 0) {
                        return false;
                    }
                }

                return true;
            }

            $array = range(0,100);
            $nbPremiers = [];

            foreach($array as $nb) {
                if (isPremier($nb)) {
                    $nbPremiers[] = $nb;
                }
            }

            echo "<p>La taille du tableau des nombres premiers est :  " . count($nbPremiers) . '</p>';

            echo "<ul>";
            foreach ($nbPremiers as $nbPremier) {
                echo "<li>$nbPremier</li>";
            }
            echo "</ul>";
        ?>

        <h2>Exercice 1.1</h2>
        <?php
            $nbPremiersV2 = range(0,100);
            $arrayLength = count($nbPremiersV2);

            for ($i = 0; $i < $arrayLength; $i++) {
                if (!isPremier($nbPremiersV2[$i])) {
                    unset($nbPremiersV2[$i]);
                }
            }

            // Reindexion du tableau 

            $nbPremiersV2 = array_values($nbPremiersV2);

            echo "<p>La taille du tableau des nombres premiers est :  " . count($nbPremiersV2) . '</p>';

            echo "<ul>";
            foreach ($nbPremiersV2 as $nbPremier) {
                echo "<li>$nbPremier</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>