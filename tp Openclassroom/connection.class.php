<?php

function connection(){
  try {
    $bdd= new PDO('mysql:host=localhost;dbname=personnages;metacharset=utf8','root','chniak24dec78-'
    , array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
 catch (Exception $e)
  {
    die('erreur:'.$e->getMessage());
}
 return $bdd;
  }

 ?>
