<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "PHP";

    function substract ($a, $b){
        $result = $a - $b;
        return $result;
    }
    $result = substract(25, 12);
    echo $result;
    ?>
</body>
</html>