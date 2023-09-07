<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php

    if(isset($_GET['id_article'])){
        $servername = "127.0.0.1";
        $password = "";
        $user = "root";
        $dbname = "articles";


        try{
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $pdo->exec("set names utf8");
    
            $idArticle = (int)$_GET['id_article'];
            
            $reponse = $pdo->prepare("SELECT * FROM article WHERE id_article = ?");
            $reponse->bindParam(1,$idArticle,PDO::PARAM_INT);
            $reponse->execute();
            if($reponse->rowCount() !== 1) {
                throw new PDOException("ID article inconnu");
            }

            $article = $reponse->fetch();

            var_dump($article);

        }catch(PDOException $e){
            echo "connexion failed". $e->getMessage() ."\r\n";
            
        }
    }

    
    if (isset($_POST["nouveau_nom_article"]) && isset($_POST["nouveau_contenu_article"])) {
        $servername = "127.0.0.1";
        $password = "";
        $user = "root";
        $dbname = "articles";
        
        
        $nameArticle = (string)$_POST['nouveau_nom_article'];
        $contenuArticle = (string)$_POST['nouveau_contenu_article'];
        
        try{
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $pdo->exec("set names utf8");
            
            //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
            $reponse = $pdo->prepare("UPDATE article set nom_article = :nom_article, 
            contenu_article = :contenu_article WHERE id_article = :id_article");


            $reponse->bindParam('nom_article', $nameArticle, PDO::PARAM_STR);
            $reponse->bindParam('contenu_article', $contenuArticle, PDO::PARAM_STR);
            $reponse->bindParam('id_article', $idArticle, PDO::PARAM_STR);


            $reponse->execute();

    }
    catch(PDOException $e){
        echo "connexion failed". $e->getMessage() ."\r\n";
        
    }
}
    ?>
    <!-- <label for="nom_initial_article">Nom initial de l'article:</label>
    <input id="nom_initial_article" name="nom_initial_article" type="text" required> -->

<form action="modification_article.php" method="post">
    <div>
        <label for="nouveau_nom_article">Nouveau nom de l'article:</label>
        <input id="nouveau_nom_article" name="nouveau_nom_article" type="text" required>
    </div>
    <div>
        <label for="nouveau_contenu_article">Nouvelle Description :</label>
        <input id="nouveau_contenu_article" name="nouveau_contenu_article" type="text" required>
    </div>
    <input type="hidden" name="id_article" value="<?= $article['id_article'] ?>"/>
    <div>
        <input type="submit" id="envoyez" value="Modifier"/>
    </div>
</form>







</body>
</html>