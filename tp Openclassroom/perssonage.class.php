<?php



class Personnage

{

  private $_id;
  private $_degat;
  private $_nom;

// --------------------------------constructeur
// --------------------------------------------

  public function __construct(array $donnes){
    $this->hydrate($donnes);
  }
  public function hydrate(array $donnes){
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

  public function setDegat($degat){
    $this->_degat=$degat;
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
  public function getDegat(){
    return $this->_degat;
  }
  // ----------------------methode frappe
  // --------------------------------------
  public function frapper($cible){
    if ($this->_id==$this->_id) {
      echo "mauvaise cible";
    }else {
      $cible->rammasse();
    }

  }
// ------------------------methode recevoir degat
// ----------------------------------------------
public function rammasse(){
  $this->_degat +=5;
    echo $this->_nom . "a été frappé";
    }

}


 ?>
