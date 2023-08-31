<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Bienvenue sur calculatrice.php</h1>


    <form action="resultat.php" method="post">
        <div>
            <label for="Number_1">Entrez votre premier chiffre svp</label>
            <input id="Number_1" name="Number_1" type="number" step="0.01">
            <br></br>
        </div>


        <div>
            <label for="Math_operator">Choisissez votre opérateur svp</label>
            <select name="Math_operator" id="Math_operator">
                <option value="">Choisissez votre opérateur svp</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
                <option value="%">%</option>
            </select> <br></br>

        </div>


        <div>
            <label for="Number_2">Entrez votre deuxième chiffre svp</label>
            <input id="Number_2" name="Number_2" type="number" step="0.01">
            <br></br>
        </div>


        <div>
            <input type="submit" id="Calculez" value="Calculez" />
        </div>

    </form>


</body>

</html>