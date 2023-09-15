<?php
//import de l'autoloader des classes
require_once './vendor/autoload.php';
require_once './autoload.php';
use App\Controller\UtilisateurController;
use App\Controller\RolesController;

$rolesController = new RolesController();
$userController = new UtilisateurController();
//utilisation de session_start(pour gérer la connexion au serveur)
session_start();
//Analyse de l'URL avec parse_url() et retourne ses composants
$url = parse_url($_SERVER['REQUEST_URI']);
//test si l'url posséde une route sinon on renvoi à la racine
$path = isset($url['path']) ? $url['path'] : '/';
//routeur
switch ($path) {
    case '/php/mvc/':
        include './home.php';
        break;
    case '/php/mvc/useradd':
        $userController->addUser();
        break;
    case '/php/mvc/rolesadd':
        $rolesController->addRoles();
        break;
    default:
        include './error.php';
        break;
}
?>