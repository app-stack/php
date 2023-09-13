<?php
//import de la classe Maison
include './Maison.php';
//instance de 2 objets Maison
$villa = new Maison(null, 50, 30, 9);
$studio = new Maison('studio', 10, 8, null);
//appel de la fonction surface
echo "<p>la surface de ".$villa->nom." est égale à :".$villa->surface()." m2</p>";
echo "<p>la surface de ".$studio->nom." est égale à :".$studio->surface()." m2</p>";
?>