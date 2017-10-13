<?php
class Personnage{
  private $_nom;
  private $_prenom;
  private $_adresse;

  public function __construct($nom,$prenom,$adresse){
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setAdresse($adresse);
  }
  public function __destruct(){
    echo "objet detruit";
  }


  public function setNom($nom){
    $this->_nom=$nom;
  }
  public function setPrenom($prenom){
    $this->_prenom=$prenom;
  }
  public function setAdresse($adresse){
    $this->_adresse=$adresse;
  }
  public function getNom(){
    return $this->_nom;
  }
  public function getPrenom(){
    return $this->_prenom;
  }
  public function getAdresse(){
    return $this->_adresse;
  }
  public function affiche(){
    echo "nom : " . $this->_nom .
         "<br>prenom : " . $this->_prenom .
         "<br>adresse : " . $this->_adresse . "<br><br><br>";
  }
}
$nico=new Personnage('nicolas','urbaniak','158 rue f de ....carvin');

echo $nico->affiche();
$nico->setAdresse('rue marlot Roubaix');
echo $nico->affiche();

unset($nico);
$nico->affiche();
 ?>
