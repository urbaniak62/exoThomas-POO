<?php
class Personnage

{

  private $_id;
  private $_degats;
  private $_nom;

// --------------------------------constructeur
// --------------------------------------------

  public function __construct(array $donnes){
    $this->hydrate($donnes);
  }
// ---------------------------------hydratation
// --------------------------------------------
  public function hydrate(array $donnees){
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

// ---------------------------------setters
// ----------------------------------------------------------

  public function setId($id){
    $this->_id=$id;
  }

  public function setDegats($degats){
    $this->_degats=$degats;
  }
  public function setNom($nom){
    $this->_nom=$nom;
  }

// -----------------------------------getters
//-------------------------------------------

  public function getId(){
    return $this->_id;
  }

  public function getNom(){
    return $this->_nom;
  }
  public function getDegats(){
    return $this->_degats;
  }
  // ----------------------methode frappe
  // --------------------------------------
  public function frapper($cible){
    if ($cible->_id==$this->_id) {
      echo "mauvaise cible";
    }else {
      $cible->rammasse();
    }

  }
// ------------------------methode recevoir degat
// ----------------------------------------------
public function rammasse(){
  $this->_degats +=5;
    echo $this->_nom . "a été frappé";
    }
public function affiche(){
  echo $this->_nom . " " . $this->_degats;
}

}


 ?>
