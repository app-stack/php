<?php
echo "<h1>addArticle.php<h1>";

// $servername = "mysql:host=127.0.0.1";
// $password = "";
// $user = "root";
// $dbname = "evaluation";

if (isset($_POST["nom_article"]) && isset($_POST["prix_article"])) {

    $name = (string) $_POST["nom_article"];
    $prix = (float) $_POST["prix_article"];

    try {
        $db = new PDO("mysql:host=127.0.0.1;dbname=evaluation", "root", "");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "<p>Connected successfully</p>";
        //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
        $req = $db->prepare('INSERT INTO article(nom_article, prix_article) VALUES(:nom_article, :prix_article)');
        // On va "binder" le paramètre correspondant au "non_utilisateur" de type String 
        $req->bindParam('nom_article', $name, PDO::PARAM_STR);
        $req->bindParam('prix_article', $prix, PDO::PARAM_STR);
        //Une fois tous les paramètres bindés, on peut exécuter la requete
        $req->execute();
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage() . "<br>";

    }

}
?>