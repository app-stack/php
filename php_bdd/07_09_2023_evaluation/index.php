<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Index.php</h1>
    <form action="addArticle.php" method="post">
        <div>
            <label for="nom_article">Nom de l'article:</label>
            <input id="nom_article" name="nom_article" type="text" required>
        </div>
        <div>
            <label for="prix_article">Prix de l'article</label>
            <input id="prix_article" name="prix_article" type="number" step ="0.01" required>
        </div>
        <div>
            <input type="submit" id="ajouter" value="Ajouter" />
        </div>
</body>
</html>