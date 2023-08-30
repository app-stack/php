<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
</head>
<body>
    <h1>Exercice 1</h1>
    <form action="" methode="get">
        
        <div>
            <label for="number1">nombre1 :</label>
            <input id="number1" name="number1" type="number">
        </div>
        <div>
            <label for="number2">nombre2 :</label>
            <input id="number2" name="number2" type="number" >
        </div>
        <div>
        <input type="submit" value="Envoyer le formulaire" />
        </div>
    </form>
    <?php
        if(isset($_GET["number1"])&& isset($_GET["number2"])){

            echo "La somme du nombre1 et du nombre2 est ";
            echo $_GET["number1"] + $_GET["number2"];
        }
    ?>



    <h1>Exercice 2</h1>
    <form action="" methode="get">
        
        <div>
            <label for="prixHt">Entrez le prix HT de l'article</label>
            <input id="prixHt" name="prixHt" type="number" step="0.01">
        </div>
        <div>
            <label for="nombreArticle">Entrez le nombre d’article:</label>
            <input id="nombreArticle" name="nombreArticle" type="number">
        </div>
        <div>
            <label for="tva">Entrez le taux de TVA:</label>
            <input id="tva" name="tva" type="number" step="0.01">
        </div>
        <div>
        <input type="submit" id="envoyez" value="Envoyer le formulaire" />
        </div>
    </form>
    <?php
        if(isset($_GET["prixHt"]) && isset($_GET["nombreArticle"]) && isset($_GET["tva"])){
            echo "Le prix TTC est égale à : ";
            echo $_GET["prixHt"] * $_GET["tva"] * $_GET["nombreArticle"];
            echo "€";
        }
    ?>

</body>
</html>