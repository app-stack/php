<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="" method="post">
        <div>
            <label for="nom_article">Nom de l'article:</label>
            <input id="nom_article" name="nom_article" type="text">
        </div>
        <div>
            <label for="contenu_article">Description:</label>
            <input id="contenu_article" name="contenu_article" type="text">
        </div>
        <div>
            <input type="submit" id="envoyez" value="Ajouter" />
        </div>
    </form>

    <?php

        if(isset($_POST["nom_article"]) && isset($_POST["contenu_article"])){
                    
            $name = (string)$_POST["nom_article"];
            $content = (string)$_POST["contenu_article"];

    $db = null;

    try{
        $db = new PDO("mysql:host=127.0.0.1;dbname=articles","root","");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Connected successfully</p>";
    }catch(PDOException $e){
        echo "Connection failed: ". $e->getMessage() . "<br>";
    
    }

    $db->query("INSERT INTO article(nom_article, contenu_article) VALUES('$name','$content')");
    
    echo $_POST["nom_article"];
    echo "<br/>";
    echo $_POST["contenu_article"];

}

    
    
    ?>
</body>
</html>