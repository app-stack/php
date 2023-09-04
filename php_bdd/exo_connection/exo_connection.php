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
            <h1>Ajoutez un article</h1>
            <br>
            <label for="nom_article">Nom de l'article:</label><br>
            <input id="nom_article" name="nom_article" type="text" required>
            <br>
            <br>
        </div>
        <div>
            <label for="contenu_article">Description:</label><br>
            <textarea id="contenu_article" name="contenu_article" rows="3" cols="50" required></textarea><br><br>
        </div>
        <div>
            <input type="submit" id="envoyez" value="Ajouter" />
        </div>
    </form>

    <?php

    if (isset($_POST["nom_article"]) && isset($_POST["contenu_article"])) {

        // if (!empty($_POST["nom_article"]))
        // if ($_POST["nom_article"] !== '')
        // if ($_POST["nom_article"] !== null)
        $name = (string) $_POST["nom_article"];
        $content = (string) $_POST["contenu_article"];

        $db = null;

        try {
            $db = new PDO("mysql:host=127.0.0.1;dbname=articles", "root", "");
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "<p>Connected successfully</p>";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage() . "<br>";

        }

        $db->query("INSERT INTO article(nom_article, contenu_article) VALUES('$name','$content')");

        echo $_POST["nom_article"];
        echo "<br/>";
        echo $_POST["contenu_article"];

    }

    //Utiliser l'auto format du php, shift + Alt + f
    
    ?>
</body>

</html>