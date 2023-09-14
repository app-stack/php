<?php
class Admin extends Utilisateur{
    
    private array $bans; 

    

    public function __construct(?string $nom, ?string $prenom){
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->bans = [];
    }

    //Setter de $bans
    public function banUser($param1){
        $this->bans[] = $param1;
    }
    
    //Getter de $bans
    public function getBans(){
        return $this->bans;
    }

    //Méthodes
    public function debanUser(Utilisateur $deban){
        //Version avec méthode native php
        unset($this->bans[array_search($deban, $this->bans)]);
        //Version avec une boucle
        /*foreach ($this->bans as $key => $value) {
            if($value==$deban){
                unset($this->bans[$key]);
            }
        }*/
    }
}
?>