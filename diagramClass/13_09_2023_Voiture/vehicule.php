<?php
class Vehicule
{
    //Attributs :
    private $nomVehicule;
    private $nbrRoue;
    private $vitesse;

    // Constructeur
    public function __construct(?string $nouveauNomVehicule, ?int $nouveauNbrRoue, ?float $nouvelleVitesse)
    {
        $this->nomVehicule = $nouveauNomVehicule;
        $this->nbrRoue = $nouveauNbrRoue;
        $this->vitesse = $nouvelleVitesse;
    }


    // // toString
    // public function __toString(){
    //     return $this->nomVehicule.' '.$this->nbrRoue.' '.$this->vitesse;
    //     //ici on remplace la valeur par l’attribut de la classe que l’on
    //     souhaite afficher (par ex le //nom)
    //     }


    //Detect
    public function detect(): string
    {
        if ($this->nbrRoue == 2) {
            return "moto";
        } else {
            return "voiture";
        }
    }

    //Boost
    public function boost()
    {
        $this->vitesse += 50;
    }

    public function plusRapide(Vehicule $rival): ?string
    {
        if ($this->vitesse > $rival->vitesse) {
            return $this->nomVehicule;
        } else if ($this->vitesse == $rival->vitesse) {
            return "Identique";
        } else {
            return $rival->nomVehicule;
        }

    }

    public function getNom(): ?string
    {
        return $this->nomVehicule;
        //Permet de lire et renvoyer l'information, de consulter
    }
    public function setNom(?string $nomVehicule): void
    {
        $this->nomVehicule = $nomVehicule;
        //Permet d'écrire ou remplacer la valeur d'un attribut
    }

    public function getnbrRoue(): ?int
    {
        return $this->nbrRoue;
        //Permet de lire et renvoyer l'information, de consulter
    }
    public function setnbrRoue(?int $nbrRoue): void
    {
        $this->nbrRoue = $nbrRoue;
        //Permet d'écrire ou remplacer la valeur d'un attribut
    }

    public function getVitesse(): ?int
    {
        return $this->vitesse;
        //Permet de lire et renvoyer l'information, de consulter
    }
    public function setVitesse(?int $vitesse): void
    {
        $this->vitesse = $vitesse;
        //Permet d'écrire ou remplacer la valeur d'un attribut
    }

}

?>


<!-- class Vehicule{
    public ?string $nom;
    public ?int $roue;
    public ?int $vitesse;
    public function __construct(?string $newNom, ?int $newRoue, ?int $newVitesse){
        $this->nom = $newNom;
        $this->roue = $newRoue;
        $this->vitesse = $newVitesse;
    }
    public function detect():?string{
        if($this->roue == 4){
            return "Voiture";
        }else if($this->roue == 2){
            return "Moto";
        }else{
            return "Autre";
        }
    }
    public function boost():void{
        $this->vitesse += 50;
    }
    public function plusRapide(Vehicule $rival):?string{
        if($this->vitesse >$rival->vitesse){
            return $this->nom;
        }else if($this->vitesse == $rival->vitesse){
            return "Identique";
        }else{
            return $rival->nom;
        }
    }
} -->

    <!-- //     public function getNom():?string{
        return $this->nom;
    }
    public function setNom(?string $nom):void{
        $this->nom = $nom;
    }
    public function getRoue():?int{
        return $this->roue;
    }
    public function setRoue(?int $roue):void{
        $this->roue = $roue;
    }
    public function getVitesse():?int{
            return $this->vitesse;
        }
    public function setVitesse(?int $vitesse):void{
        $this->vitesse = $vitesse; -->