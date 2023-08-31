<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $db = null;

    try{
        $db = new PDO("mysql:host=127.0.0.1;dbname=la_bagarre","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Connected successfully</p>";
    }catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage() . "<br>";
    }
    
    ?>
</body>
</html>