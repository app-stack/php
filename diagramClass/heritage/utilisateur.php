<?php
class Utilisateur{
    private ?string $nom;
    private ?string $prenom;

    public function __construct(?string $nom, ?string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
    public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $nom){
        $this->nom = $nom;
    }
    public function getPrenom():?string{
        return $this->prenom;
    }
    public function setPrenom(?string $prenom){
        $this->prenom = $prenom;
    }
}
?>