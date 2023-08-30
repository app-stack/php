<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tab_0_1000 = range(0,1000);

    function isPremier(int $nb):bool
    {
        if ($nb < 2) {
            echo "Le nombre $nb n'est pas un nombre premier";
            return false;
        }

        for ($i = 2; $i < $nb; $i++) {
            if ($nb % $i === 0) {
                echo "Le nombre $nb n'est pas un nombre premier";
                return false;
            }
        }

        echo "Le nombre $nb est un nombre premier";
        return true;
    }
    isPremier(2);
    echo "<br>";
    isPremier(7);
    echo "<br>";
    isPremier(3);



    
    ?>
</body>
</html>