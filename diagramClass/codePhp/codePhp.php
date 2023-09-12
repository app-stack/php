<?php

class Exemple{
    public $taille;
    public $poids;
    public $nom;
    // Fonction __construct qui doit toujours être en public:
    public function __construct($newNom, $newTaille, $newPoids){

// $this => Mot clé qui correspond à l'instance de l'ojet courant, cad l'objet que je vais créer, ici par exemplece sera le chat, dans un autre cas, le chien etc, il fait référence à l'objet que je créé depuis cette classe:
        $this->nom = $newNom;
        $this->taille = $newTaille;
        $this->poids = $newPoids;
// Si je le fais comme ça, dans l'autre fichier, index.php, je vais avoir une erreur et je vais devoir assigner toutes les valeurs directement (instancie la classe, se sert du plan pour créer un objet) dans "$chat = new Exemple(...)" va devenir:
// ?$chat = new Exemple('chat', 40, 5);
// // $chat->nom = 'chat'; plus besoin de ça
// // $chat->taille = 40; plus besoin de ça
// // $chat->poids = 5; plus besoin de ça
        
    }

    public function crie(){
        switch ($this->nom) {
            case 'chien':
                echo 'ouaf';
                break;
            case 'chat':
                echo 'miaou';
                break;
            case 'oiseau':
                echo 'cuicui';
                break;
            default:
                echo 'l\'animal n\'existe pas';
                break;
        }
    }
    public function __toString()
    {
        return $this->nom.' '.$this->taille.' '.$this->poids;
    }

}



?>