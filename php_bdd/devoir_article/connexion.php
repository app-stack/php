<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Connexion php</h1>
<?php
    $servername = "mysql:host=127.0.0.1";
    $password = "";
    $user = "root";
    $dbname = "articles";
    try{
        $pdo = new PDO("mysql:host=127.0.0.1;dbname=$dbname", $user, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Connected successfully</p>";
    }
    catch(PDOException $e){
            echo "connexion failed". $e->getMessage() ."\r\n";
        }
    ?>
</body>
</html>