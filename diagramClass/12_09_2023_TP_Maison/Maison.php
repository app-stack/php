<?php

// Créer une nouvelle classe Maison Maison.php qui va contenir les attributs suivants :
// -nom, longueur, largeur.


class Maison{
    public ?string $nom;
    public ?float $longueur;
    public ?float $largeur;
    public ?int $nbrEtage;
    public function __construct(?string $nouveauNom, 
    ?float $nouveauLongueur, ?float $nouveauLargeur, ?int $nouveauEtage){
        $this->nom = $nouveauNom;
        $this->longueur = $nouveauLongueur;
        $this->largeur = $nouveauLargeur;
        $this->nbrEtage = $nouveauEtage;
    }
    public function surface():float{
        if($this->nbrEtage > 0 ){
            return $this->longueur*$this->largeur*($this->nbrEtage+1);
        }else{
            return $this->longueur*$this->largeur;
        }
    }
}
?>