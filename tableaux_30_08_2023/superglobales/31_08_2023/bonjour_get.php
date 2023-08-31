<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienvenue sur bonjour_get.php</h1>
        <?php
    //test de l'existence de la super globale $_GET
    if(isset($_GET['nom'])){
        $nom = $_GET['nom'];
        echo "Bonjour, mon nom est : $nom"; 
    }
?>
</body>
</html>