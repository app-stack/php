<?php
$servername = "mysql:host=127.0.0.1";
$password = "";
$user = "root";
$dbname = "articles";





try {

    $pdo = new PDO("$servername;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $pdo->exec("set names utf8");
} catch (PDOException $e) {
    echo $e->getMessage();
}

?>


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
            <input id="nom_article" name="nom_article" type="text" required>
        </div>
        <div>
            <label for="contenu_article">Description :</label>
            <input id="contenu_article" name="contenu_article" type="text" required>
        </div>
        <div>
            <label for="categorie_article">Catégorie article :</label>
            <select name="categorie_article">
                <option value=""></option>


                <?php
                $sql = ("SELECT * from categorie");
                $req = $pdo->query($sql);
                
                // while ($category = $req->fetch()) {
                //     echo "<option value=" . $category['id_categorie'] . ">" . $category['nom_categorie'] . "</option>";

                // }

                $arrayCategorie = $req->fetchAll();
                foreach ($arrayCategorie as $categorie) {
                    echo "<option value=" . $categorie['id_categorie'] . ">" . $categorie['nom_categorie'] . "</option>";
                }
                ?>



                <!-- 
                <option value="animal">Animal</option>
                <option value="dragon">Dragon</option>
                <option value="lessive">Lessive</option>

                <option value="pizza">Pizza</option>
                <option value="charcuterie">Charcuterie</option>
                <option value="produits_laitiers">Produits laitiers</option>
                <option value="glaces">Glaces</option> -->
            </select>
        </div>
        <div>
            <input type="submit" id="envoyez" value="Ajouter" />
        </div>

    </form>


    <?php
    if (isset($_POST["nom_article"]) && isset($_POST["contenu_article"])) {

        $name = (string) $_POST["nom_article"];
        $content = (string) $_POST["contenu_article"];





        try {


            //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
            $req = $pdo->prepare("INSERT INTO article(nom_article, contenu_article) VALUES(:nom_article,:contenu_article)");
            // On va "binder" le paramètre correspondant au "non_utilisateur" de type String 
            $req->bindParam('nom_article', $name, PDO::PARAM_STR);
            $req->bindParam('contenu_article', $content, PDO::PARAM_STR);
            //Une fois tous les paramètres bindés, on peut exécuter la requete
            $req->execute();
        } catch (PDOException $e) {
            echo "connexion failed" . $e->getMessage() . "\r\n";

        }



    }
    

    ?>
</body>

</html>