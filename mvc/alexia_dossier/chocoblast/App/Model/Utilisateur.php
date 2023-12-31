<?php

// On dit où se situe le fichier, où se situe également sa base de donnée: 
namespace App\Model;
use App\Utils\BddConnect;
use App\Model\Roles;
class Utilisateur extends BddConnect{
    // Attributs
    private ?int $id_utilisateur;
    private ?string $nom_utilisateur;
    private ?string $prenom_utilisateur;
    private ?string $mail_utilisateur;
    private ?string $password_utilisateur;
    private ?string $image_utilisateur;
    private Roles $roles;
    // Quand l'activation se fera par mail, le booléen sera vrai:
    private bool $statut_utilisateur;

    // Constructeur:
    public function __construct(){
        $this->roles = new Roles();
    }

    // Getters et Setters
    public function getId():?int{
        return $this->id_utilisateur;
    }
    public function setId(?int $id){
        $this->id_utilisateur = $id;
    }

    public function getNom():?string{
        return $this->nom_utilisateur;
    }
    public function setnom(?string $nom){
        $this->nom_utilisateur = $nom;
    }

    public function getPrenom():?string{
        return $this->prenom_utilisateur;
    }
    public function setPrenom(?string $prenom){
        $this->prenom_utilisateur = $prenom;
    }

    public function getMail():?string{
        return $this->mail_utilisateur;
    }
    public function setMail(?string $mail){
        $this->mail_utilisateur = $mail;
    }

    public function getPassword():?string{
        return $this->password_utilisateur;
    }
    public function setPassword(?string $password){
        $this->password_utilisateur = $password;
    }

    public function getImage():?string{
        return $this->image_utilisateur;
    }
    public function setImage(?string $image){
        $this->image_utilisateur = $image;
    }

    public function getStatut():?bool{
        return $this->statut_utilisateur;
    }
    public function setStatut(?bool $statut){
        $this->statut_utilisateur = $statut;
    }

    // Méthodes (chaque fois qu'on ajoute une classe qui vient de PHP on met un \ devant (exemple pour Exception)):
    public function add(){
        try{
            // Récupérer les données e l'objet "utilisateur":
            $nom = $this->nom_utilisateur;
            $prenom = $this->prenom_utilisateur;
            $mail = $this->mail_utilisateur;
            $password = $this->password_utilisateur;
             // Ensuite se connecter pour récupérer les donéne de la BDD:
            $req = $this->connexion()->prepare(
                "INSERT INTO utilisateur(nom_utilisateur, prenom_utilisateur, mail_utilisateur, password_utilisateur) VALUE(?,?,?,?)");    
            // bindParam assigne les valeurs(ex: au 1er point, je te donne un nom, qui aura comme paramètre une chaîne de caractères):
            $req->bindParam(1, $nom,\PDO::PARAM_STR);
            $req->bindParam(2, $prenom,\PDO::PARAM_STR);
            $req->bindParam(3, $mail,\PDO::PARAM_STR);
            $req->bindParam(4, $password,\PDO::PARAM_STR);
            $req->execute();
        } catch(\Exception $e) {
            die('Error/ '.$e->getMessage());
        }
    }


}

?>