<?php

require "./vehicule.php";

$suv = new Vehicule('Mercedes CLK', 4, 250);

$moto = new Vehicule('Honda CBR', 2, 280);

echo "Ce véhicule " . $suv->getNom() . " est une " . $suv->detect() . ".";
echo "<br>";
echo "Ce véhicule " . $moto->getNom() . " est une " . $moto->detect() . ".";
echo "<br>";
$suv->boost();
echo "Ce véhicule " . $suv->getNom() . " roule maintenant à une vitesse de " . $suv->getvitesse() . "km/h.";
echo "<br>";
$moto->boost();
echo "Ce véhicule " . $moto->getNom() . " roule maintenant à une vitesse de " . $moto->getvitesse() . "km/h.";
echo "<p>Le véhicule le plus rapide est : " . $moto->plusRapide($suv) . "</p>";

?>


<!-- include './Vehicule.php';
    $voiture = new Vehicule('Mercedes CLK',4,250);
    $moto = new Vehicule('Honda CBR',2,280);
    echo "<p>Le véhicule : ".$voiture->nom." est de type : ".$voiture->detect()."</p>";
    echo "<p>Le véhicule : ".$moto->nom." est de type : ".$moto->detect()."</p>";
    $voiture->boost();
    echo "<p>La nouvelle vitesse du véhicule : ".$voiture->nom." est  de : ".$voiture->vitesse."</p>";
    echo "<p>Le véhicule le plus rapide est : ".$moto->plusRapide($voiture)."</p>"; -->





    <!-- include './Vehicule.php';
    $voiture = new Vehicule('Mercedes CLK',4,250);
    
    /*
    exemple incrementation avec getter et setter  
    $voiture->setVitesse($voiture->getVitesse()+50);
    exemple modification de valeur avec le setter
    $voiture->setVitesse(500);
    */
//     $moto = new Vehicule('Honda CBR',2,280);
//     echo "<p>Le véhicule : ".$voiture->getNom()." est de type : ".$voiture->detect()."</p>";
//     echo "<p>Le véhicule : ".$moto->getNom()." est de type : ".$moto->detect()."</p>";
//     $voiture->boost();
//     echo "<p>La nouvelle vitesse du véhicule : ".$voiture->getNom()." est  de : "
//     .$voiture->getVitesse()."</p>";
//     echo "<p>Le véhicule le plus rapide est : ".$moto->plusRapide($voiture)."</p>";
//  -->