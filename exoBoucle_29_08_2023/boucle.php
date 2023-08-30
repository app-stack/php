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
    //rand(int $min, int $max): int
    // $numbeRandom = rand(int 0, int 999):int;

    function choisir(int $nbr){
        $i = 0;
        $temp = null;
        while($temp !== $nbr){
            $temp = rand(0, 999);
            $i++;

        }
        return $i;
    }
    
    echo "vous avez trouvé le nombre (100) en " . choisir(100) . " essaie";
    echo "<br>";
    $nombreOccurr = choisir(100);
    echo "vous avez trouvé le nombre (100) en $nombreOccurr essaie";
    echo "<br>";
    
    echo "<h2>Deuxieme essaie</h2>";
    function choisir2(int $nbr){
        $i = 0;
        $temp = null;
        $min = 0;
        $max = 999;
        while($temp !== $nbr){
            $temp = rand($min, $max);
            if($temp > $nbr){
                $max = $temp;
            }
            else{
                $min = $temp;
            }
            $i++;
        }
        return $i;
    }
    $nombreOccurr1 = choisir2(100);
    echo "vous avez trouvé le nombre (100) en $nombreOccurr1 essaie";
    echo "<br>";

    echo "<h1>Exercice 2</h1>";


    $total = 0;
    for ($i=0; $i<7; $i++){ // Boucle correspondant aux lignes
        echo "<br>";
        for ($j=0; $j<10; $j++){    // Boucle correspondant aux colonnes
            //echo $total;
            echo $i;
        }
        //$total++;
    }

    echo "<h1>Exercice 3</h1>";

    $total = 0;
    for ($i=0; $i<8; $i++){
        echo "<br>";
        for ($j=0; $j < $i; $j++){
            echo $total;
        }
        $total++;
    }

    // boucle for 
    // for (valeur initiale, condition d'execution, operation incrémentation)

    ?>
    <!--echo "<script>console.log($i)</script>";-->
</body>
</html>

