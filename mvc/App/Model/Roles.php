<?php

// On dit où se situe le fichier, où se situe également sa base de donnée: 
namespace App\Model;
use App\Utils\BddConnect;

class Roles extends BddConnect{
    private ?int $id_roles;
    private ?string $nom_roles;
    // Constructeur si besoin
    // Getters et Setters:
    public function getId():?int{
        return $this->id_roles;
    }
    public function setId(?int $id){
        $this->id_roles = $id;
    }

    public function getNom():?string{
        return $this->nom_roles;
    }
    public function setNom(?string $nom){
        $this->nom_roles = $nom;
    }
}