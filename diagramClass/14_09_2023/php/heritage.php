<?php
    require '../vendor/autoload.php';
    include './Utilisateur.php';
    include './Admin.php';
    $user1 = new Utilisateur('user1', 'users1');
    $user2 = new Utilisateur('user2', 'users2');
    $user3 = new Utilisateur('user3', 'users3');
    $user4 = new Utilisateur('user4', 'users4');
    $admin = new Admin('admin', 'admin');
    
    dump($user1, $user2, $user3, $user4, $admin);

    $admin->banUser($user1);
    $admin->banUser($user2);
    $admin->banUser($user3);
    $admin->banUser($user4);
    $admin->getBans();

     //deban du user2
$admin->debanUser($user1);
//affichage de la liste
foreach ($admin->getBans() as $key => $value) {
    echo "<p>".$value->getNom()." ".$value->getPrenom()."</p>";
}

    
?>