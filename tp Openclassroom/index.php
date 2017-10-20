<?php
$bdd= new PDO('mysql:host=localhost;dbname=personnages;metacharset=utf8','root','chniak24dec78-'
, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

function chargerClasse ($classe) {
  // On inclue la classe correspondante au paramètre passé
  require $classe . '.class.php';
}
spl_autoload_register('chargerClasse');


 // require 'connection.class.php';
// -----------------objets
// -----------------------
$manager= new PersonageManager($bdd);
$nico= new Personnage([
      'nom'=> 'nico',
      'degats'=>'50'
    ]);

$nico->affiche();

$manager->insertion($nico);
 ?>
