<?php
    //import du fichier de configuration
    include './env.php';
    //import de l'autoloader des classes
    require_once './autoload.php';
    require_once './vendor/autoload.php';
    use App\Controller\UtilisateurController;
    use App\Controller\RolesController;
    use App\Controller\HomeController;
    use App\Controller\ChocoblastController;
    use App\Controller\CommentaireController;
    use App\Controller\ApiController;
    $userController = new UtilisateurController();  
    $rolesController = new RolesController();
    $homeController = new HomeController();   
    $chocoblastController = new ChocoblastController();  
    $commentaireController = new CommentaireController();  
    $apiController = new ApiController();  
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //version connecté
    if(isset($_SESSION['connected'])){
        //routeur
        switch ($path) {
            case '/php/mvc/':
                $homeController->getHome();
                break;
            case '/php/mvc/rolesadd':
                $rolesController->addRoles();
                break;
            case '/php/mvc/userdeconnexion':
                $userController->deconnexionUser();
                break;
            case '/php/mvc/chocoblastadd':
                $chocoblastController->addChocoblast();
                break;
            case '/php/mvc/chocoblastall':
                $chocoblastController->getAllChocoblast();
                break;
            case '/php/mvc/chocoblastupdate':
                $chocoblastController->updateChocoblast();
                break;
            case '/php/mvc/emailtest':
                $homeController->testMail();
                break;
            case '/php/mvc/chocoblastfilter':
                $chocoblastController->filterChocoblast();
                break;
            case '/php/mvc/commentaireadd':
                $commentaireController->addCommentaire();
                break;
            case '/php/mvc/commentaireall':
                $commentaireController->allCommentaire();
                break;
            case '/php/mvc/api':
                $apiController->getAllRoles();
                break;
            case '/php/mvc/api/addrole':
                $apiController->addRoleByJson();
                break;
            default:
                $homeController->get404();
                break;
        }
    }
    else{
        switch ($path) {
            case '/php/mvc/':
                $homeController->getHome();
                break;
            case '/php/mvc/userconnexion':
                $userController->connexionUser();
                break;
            case '/php/mvc/useradd':
                $userController->addUser();
                break;
            case '/php/mvc/chocoblastall':
                $chocoblastController->getAllChocoblast();
                break;
            case '/php/mvc/emailtest':
                $homeController->testMail();
                break;
            case '/php/mvc/useractivate':
                $userController->activateUser();
                break;
            case '/php/mvc/chocoblastfilter':
                $chocoblastController->filterChocoblast();
                break;
            case '/php/mvc/commentaireadd':
            case '/php/mvc/chocoblastupdate':
                $homeController->get401();
                break;
            case '/php/mvc/commentaireall':
                $commentaireController->allCommentaire();
                break;
            case '/php/mvc/api':
                $apiController->getAllRoles();
                break;
            case '/php/mvc/api/addrole':
                $apiController->addRoleByJson();
                break;
            default:
                $homeController->get404();
                break;
        }
    }
?>

