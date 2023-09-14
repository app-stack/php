<!-- Toutes les méthodes pour Utilisateur vont être crées ici, toute la logique de l'application et ses fonctionnalités sera ici -->

<?php

// On dit où se situe le fichier, où se situe également sa base de donnée: 
namespace App\Controller;
use App\Model\Utilisateur;
class UtilisateurController extends Utilisateur{
    public function addUser(){
        $error = "";
        include './App/Vue/vueAddUser.php';
    }
}