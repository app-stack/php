<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <h1>Bienvenue sur bonjour.php</h1>
        <?php
    //test de l'existence de la super globale $_POST
    if(isset($_POST['nom'])){
        $nom = $_POST['nom'];
        echo "Bonjour, mon nom est : $nom"; 
    }
?>



</body>
</html>