<?php
include './codePhp.php';
//exactement comme si j'utilisais ou je recopiais toute la page codePhp.php
// https://www.php.net/manual/en/language.oop5.magic.php
// Pour utiliser une class on va utiliser un plan, un constructeur
// __construct() // construct() = fonction liée aux classes, méthode qui va permettre d'utiliser la classe
// include et require fait comme si on a copier/coller tout le bloc classe (Exemple) et qu'on l'a coller ici

// Note la variable sans le $ devant:
// $chat->nom = 'chat';
// $chat->poids = 5;
// $chat->taille = 40;
// $chat->taille = 30;
// echo '<pre>';
// var_dump($chat);
// echo '<pre>';

    $chat = new Exemple('chat', 30, 4);
    $chien = new Exemple('chien', 40, 9);
    $tigre = new Exemple('tigre', 120, 80);
    $chat->crie();
    echo '<br>';
    $chien->crie();
    echo '<br>';
    $tigre->crie();

echo '<pre>';
var_dump($chat, $chien);
echo '<pre>';

?>