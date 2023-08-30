<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        echo "<h1>Exercice tableau 1</h1>";
        $tab3 = [];
        for($i=0;$i<50;$i++){
            $tab3[$i] = rand(-100,100);
        }
        $resultat4 = count($tab3);
        echo "La taille du tableau est de $resultat4";

        echo "<h1>Exercice tableau 2</h1>";
        
        function plusGrandTab ($tab){
                echo "Le nombre le plus grand est ". max($tab) ."";
        }
        plusGrandTab($tab3);

        echo "<h2>Deuxième méthode from scratch 2</h2>";

        function plusGrandTab2 ($tab){
            $temp = $tab[0];
            for($i =1;$i < count($tab);$i++){
                if($tab[$i] > $temp){
                    $temp = $tab[$i];
                }
            }
            echo "Le nombre le plus grand est $temp";
            return $temp;
        }
        plusGrandTab2($tab3);


        
        echo "<h1>Exercice tableau 3 </h1>";

        function moyenneTab($tab){
            $moyenne = array_sum($tab)/count($tab);
            echo "La moyenne du tableau est ". $moyenne;
            return $moyenne;
        }
        moyenneTab($tab3);


        echo "<h1>Exercice tableau 4 </h1>";
        echo "<h2>from scratch</h2>";

        function plusPetitTab ($tab){
            $temp = $tab[0];
            for($i =1;$i < count($tab);$i++){
                if( $tab[$i] < $temp){
                    $temp = $tab[$i];
                }
            }
            echo "Le nombre le plus petit est $temp";
            return $temp;
        }
        plusPetitTab($tab3);

        echo "<h2>with scratch</h2>";

        function plusPetitTab2($tab){
            echo "Le nombre le plus petit est ". min($tab) ."";
        }
        plusPetitTab2($tab3);
    ?> 

</body>
</html>