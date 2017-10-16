<?php

/*-creation de class(personage)------
---creationd'objet($nico)
---appeler une methode function chanter()--
---acceder a un attribut private
---afficheExperience();
---modifier un attribu private--
---public function addexp();
---$this->experience+=10;------------------------------*/
class Personnage{
  private $_force=10;
  private $_experience=50;
  private $_degat=0;

  public function frapper(){

  }
  public function chanter(){
    echo "tralalala <br>";
  }
  public function afficheExperience(){
    echo $this->_experience;
  }
  public function addExp(){
    $this->_experience += 10;

  }
}
$nico = new Personnage;
$nico->chanter();
$nico-> addExp();
$nico-> afficheExperience();

/*-------------------------------------------------------*/
/*-------------------------------------------------------*/

echo "<br><br>--------petite phase de combat----------<br><br>";


/*-------implemanter d'autre methode--------*/

/*-------creation de classe------------*/
class Personn{
/*-------attribu-----------------------*/
  private $_force=10;
  private $_experience=50;
  private $_degat=0;

/*-------methode-----------------------*/
   public function frapper($victime){    //---ajout d'un argument à la methode
    //  l'argument victime prend des degats par rapport a la methode $_force
     $victime->_degat += $this->_force;
  }
  public function addXp(){
    $this->_experience=$this->_experience+=10;
  }
  public function afficheExperience(){
    echo $this->_experience . " de point d experience<br>";
  }
  public function afficheDegat(){
    echo  "a subit " . $this->_degat . " de degat .";
  }
}
/*---------creation des objets------*/
$nico=new Personn;
$toto=new Personn;
/*----------appel des methodes-------*/
$nico->addXp();
$nico->afficheExperience();
$nico->frapper($toto);    //$toto devient l argument de la methode frapper
$toto->afficheDegat();

echo "<br><br>----------petit jeu de role-------------<br><br>";
// ---------------------jeu de role openclassroom
// ---------------------
class Pax{
  private $_name;
  private $_force;
  private $_experience;
  private $_degat;
  private $_vie;

  public function frapper(Pax $victime){ // $victime argument
    $victime->_degat += $this->_force;
  }
  public function addXep(){
    $this->_experience ++;
  }
  public function enlVie(Pax $victime){
    $victime->_vie -= $this->_force;
  }

  // --------------mutateur pour modifier ou inserer des valeur aux attribu

  public function setVie($vie){
    $this->_vie=$vie;
  }

  public function setForce($force){
    $this->_force=$force;
  }
  public function setExperience($experience){
    $this->_experience=$experience;
  }
  public function setName($name){
    $this->_name=$name;
  }
  public function setDegat($degat){
    $this->_degat=$degat;
  }
  // methode degat (affiche la fonction afficheDegat)

  public function afficheDegat(){
    return $this->_degat;
  }
  // methode afficheName
  public function afficheName(){
    return $this->_name;
  }
  public function afficheForce(){
    return $this->_force;
  }
  public function afficheExperience(){
    return $this->_experience;
  }
  public function afficheVie(){
    return $this->_vie;
  }

}
// -----Creation d'objets
$jojo=new Pax;
$jaja=new Pax;
// affectation de valeur (set)
$jojo->setForce(10);
$jojo->setExperience(15);
$jojo->setName('jojo');
$jojo->setVie(100);

$jaja->setForce(30);
$jaja->setExperience(15);
$jaja->setName("JAJA");
$jaja->setVie(20);

// ------------------action effectuer

$jojo->frapper($jaja);
$jojo->addXep();
$jojo->afficheDegat();
$jojo->afficheVie();
$jojo->enlVie($jaja);

$jaja->frapper($jojo);
$jaja->addXep();
$jaja->afficheDegat();
$jaja->afficheVie();
// -------------------------------affichage
echo  $jojo->afficheName() . " a " . $jojo->afficheForce() . " de force "
      . " et une experience de " . $jojo->afficheExperience()
      . " et " . $jojo->afficheVie() . " vie. <br>" . $jojo->afficheName()
      . " frappe " . $jaja->afficheName() . " avec une force de "
      . $jojo->afficheForce()  ;
echo  " la vie de jaja est de " . $jaja->afficheVie();

 ?>
