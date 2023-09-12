<?php

// Créer une nouvelle classe Maison Maison.php qui va contenir les attributs suivants :
// -nom, longueur, largeur.
class Maison
{

    public $nom;
    public $longueur;
    public $largeur;
    public function __construct($newNom, $newLongueur, $newLargeur)
    {
        $this->nom = $newNom;
        $this->longueur = $newLongueur;
        $this->largeur = $newLargeur;
    }
    public function surface()
    {
        $surface == $this->longueur * $this->largeur;
    }
}
?>