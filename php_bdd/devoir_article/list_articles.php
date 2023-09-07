<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    
    <?php
        $servername = "127.0.0.1";
        $password = "";
        $user = "root";
        $dbname = "articles";
        
        try{
            $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $pdo->exec("set names utf8");
        
            //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
            $reponse = $pdo->query("SELECT * FROM article ");
            while ($donnees = $reponse->fetch()) {
                //affichage des données d’une colonne de la bdd par son non d’attribut
                echo "<p>numéro de  l’article : ". $donnees['id_article'] ."</p>";
                echo "<p>nom de  l’article :<a href='modification_article.php?id_article=". $donnees['id_article'] ."'> " . $donnees['nom_article'] . "</a></p>";
                echo "<p>contenu de  l’article : ". $donnees['contenu_article'] ."</p>";
                echo "<br/>";
            }
        
        }
        catch(PDOException $e){
            echo "connexion failed". $e->getMessage() ."\r\n";
            
        }
        
    ?>













</body>
</html>