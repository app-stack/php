<?php
class Admin extends Utilisateur{
    
    public function __construct(?string $nom, ?string $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
    }
}
?>