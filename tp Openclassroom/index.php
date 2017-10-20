<?php
$bdd= new PDO('mysql:host=localhost;dbname=personnages;metacharset=utf8','root','chniak24dec78-'
, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// include_once('connection.class.php');

function chargerClasse ($classe) {
  // On inclue la classe correspondante au paramètre passé
  require $classe . '.class.php';
}
spl_autoload_register('chargerClasse');



// -----------------objets
// -----------------------
$manager= new PersonageManager($bdd);
$nico= new Personnage([
      'nom'=> 'crispy',
      'degats'=>50
    ]);

$nico->affiche();

$manager->insertion($nico);
var_dump($nico);
 ?>
