<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un utilisateur</title>
</head>
<body>
    <form action="" method="post">
        <label for="nom_utilisateur">Saisir le nom:</label>
        <input type="text" name="nom_utilisateur">
        <label for="role_utilisateur">Saisir le rôle:</label>
        <input type="text" name="role_utilisateur">
        
        <input type="submit" value="Ajouter" name="submit">
        <div><?=$error?></div>
    </form>
</body>
</html>