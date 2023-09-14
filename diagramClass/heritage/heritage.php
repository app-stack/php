<?php
    require './vendor/autoload.php';
    include './Utilisateur.php';
    include './Admin.php';
    $user1 = new Utilisateur('user1', 'users1');
    $admin = new Admin('admin', 'admin');
    //L'on entoure le var_dump de echo <pre> balise html permet d'afficher plus proprement
    // echo '<pre>';
    // var_dump($user1, $admin);
    // echo '</pre>';
    dd($user1);
    dd($admin);
?>