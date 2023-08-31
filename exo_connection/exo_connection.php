<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice connection php_bdd</h1>

    <form action=" " method="post">
        <div>
                <label for="nom_article">Nom_article</label>
                <input type="text" name="nom_article" />
            <br></br>
        </div>

        <div>
                <label for="contenu_article">Contenu_article</label>
                <input type="textarea" name="contenu_article" />
            <br></br>
        </div>

        <div>
            <input type="submit" id="Ajoutez" value="Ajoutez" />
        </div>
    </form>

    <?php
        // $name = 
        // $content = 
        if (isset($_POST['Nom_article']) && isset($_POST['Contenu_article']));
    ?>
</body>
</html>