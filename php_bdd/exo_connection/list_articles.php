<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des articles</title>
</head>
<body>

    <h1>Liste des articles</h1>

    <?php
        if(isset($_POST["nom_article"]) && isset($_POST["contenu_article"])){
            
            $name = (string)$_POST["nom_article"];
            $content = (string)$_POST["contenu_article"];
                        
            try{
                $db = new PDO("mysql:host=127.0.0.1;dbname=articles", "root", "");
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $db->exec("set names utf8");
            
                //Préparation de la requête SQL nous stockons dans une variable $req la requête à exécuter
                $reponse = $db->query("SELECT * FROM article");
                while ($donnees = $reponse->fetch()) {
                    //affichage des données d’une colonne de la bdd par son non d’attribut
                    echo "<p>numéro de  l’article : ". $donnees['id_article'] ."</p>";
                    echo "<p>nom de  l’article : ". $donnees['nom_article'] ."</p>";
                    echo "<p>contenu de  l’article : ". $donnees['contenu_article'] ."</p>";
                    echo "<br/>";
                }
            
            }
            catch(PDOException $e){
                echo "connexion failed". $e->getMessage() ."\r\n";
                
            }
        }
    ?>

    </body>
</html>