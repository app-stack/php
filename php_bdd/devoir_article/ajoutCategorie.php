<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>ajoutCategorie</h1>

    <form action="ajoutCategorie.php" method="post">
        <div>
            <label for="nom_categorie">Nom de la categorie:</label>
            <input id="nom_categorie" name="nom_categorie" type="text" required>
        </div>
        <div>
            <input type="submit" id="envoyez" value="Ajouter" />
        </div>
    </form>

    <?php


    ?>

    <?php
    if (isset($_POST["nom_categorie"])) {

        $categorie = (string) $_POST["nom_categorie"];
        // $idArticle = (string) $_POST["id_categorie"];

        $servername = "mysql:host=127.0.0.1";
        $password = "";
        $user = "root";
        $dbname = "articles";

        try {

            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $pdo->exec("set names utf8");

            //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
            $req = $pdo->prepare("INSERT INTO categorie(nom_categorie) VALUES(:nom_categorie)");
            // On va "binder" le paramètre correspondant au "non_utilisateur" de type String 
            $req->bindParam('nom_categorie', $categorie, PDO::PARAM_STR);
            //Une fois tous les paramètres bindés, on peut exécuter la requete
            $req->execute();
        } catch (PDOException $e) {
            echo "connexion failed" . $e->getMessage() . "\r\n";

        }


    }
    ?>
</body>

</html>