<?php
namespace App\Controller;

use App\Model\Roles;

class RolesController extends Roles {

    public function addRoles(){
        $error = "";
        //tester si le formulaire
        if(isset($_POST['submit'])){
            //test si les champs sont remplis
            if(!empty($_POST['nom_roles'])){
                $this->setNom($_POST['nom_roles']);
                //Ajouter le rôle en BDD
                if(!$this->findOneBy()){
                    //Ajouter le rôle en BDD
                    $this->add();
                    $error = "Le rôle a été ajouté en BDD";
                }    
                else{
                    $error = "Le rôle ne peut être ajouté";
                }
            }
            else{
                $error = "Veuillez remplir ce formulaire";
            }
        }
        include './App/Vue/vueAddRoles.php';    
    }

}

?>