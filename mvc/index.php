<?php
    //import de l'autoloader des classes
    require_once './autoload.php';
    require_once './vendor/autoload.php';
    use App\Controller\UtilisateurController;
    use App\Controller\RolesController;
    $userController = new UtilisateurController();  
    $rolesController = new RolesController();  
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    switch ($path) {
        case '/mvc/':
            $userController->home();
            break;
        case '/php/mvc/useradd':
            $userController->addUser();
            break;
        case '/php/mvc/rolesadd':
            $rolesController->addRoles();
            break;
        case '/php/mvc/userconnexion':
            $userController->connexionUser();
            break;
        case '/php/mvc/userdeconnexion':
            $userController->deconnexionUser();
            break;
        default:
            include './error.php';
            break;
    }
?>