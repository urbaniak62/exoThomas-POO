<?php
echo "<h1>excercice1</h1><br><br><br>";

class Ville{
  private $_nom;
  private $_dep;


  public function setNom($nom){
    $this->_nom=$nom;
  }
  public function setDep($dep){
    $this->_dep=$dep;
  }
  public function nom(){
      return $this->_nom;
  }
  public function dep(){
    return $this->_dep;
  }
  public function afficheTout(){
    echo "la ville de " . $this->_nom . " est dans le : " . $this->_dep;
  }

}
$carvin= new Ville;
$roubaix= new Ville;

$carvin->setNom('carvin');
$carvin->setDep('62');

$roubaix->setNom('roubaix');
$roubaix->setDep('59');

echo $carvin->afficheTout() . "<br>";
echo "la ville de " . $roubaix->nom()
 . " est dans le : " . $roubaix->dep();

// -----EXERCICE 2-------------------

echo "<br><br><br>";
echo "<h1>excercice2</h1><br><br><br>";

class Pays{
  private $_nom;
  private $_continent;

  public function __construct($nom,$continent){
    $this->setNom($nom);
    $this->setContinent($continent);

  }
  public function setNom($nom){
    $this->_nom=$nom;
  }
  public function setContinent($continent){
    $this->_continent=$continent;
  }
  public function nom(){
    return $this->_nom;
  }
  public function continent(){
    return $this->_continent;
  }
  public function afficheTout(){
    echo "le pays " . $this->_nom
    . " est dans : " . $this->_continent;
  }
}
$france= new Pays('france','europe');
$gabon= new Pays('gabon','africain');

echo $france->afficheTout() . "<br>";
echo $gabon->afficheTout();


// ------------exercice 3--------------

echo "<h1>excercice3</h1><br><br><br>";
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

$nico->affiche();
$nico->setAdresse('rue marlot Roubaix');
$nico->affiche();
$nico->setAdresse('rrrroorrnskd');
$nico->affiche();

unset($nico);
// $nico->affiche();

// ------------exercice 4 ---


echo "<h1>excercice4</h1><br><br>";

class Form{
  private $_text;
  private $_submit;
  private $_fieldset;
  private $_form;



  public function __construct($form,$fieldset){
    $this->setForm($form);
    $this->setFieldset($fieldset);
  }
  public function setText($text){
    $this->_text="<br><label>message</label><input type='text'>";
  }
  public function setSubmit($submit){
    $this->_submit="<input type='submit'>";
  }
  public function setFieldset($fieldset){
    $this->_fieldset="<form methode ='post'><fieldset>fieldset";
  }
  public function setForm($form){
    $this->_form="</fieldset></form>";
  }
  public function getText(){
    return $this->_text;
  }
  public function getSubmit(){
    return $this->_submit;
  }
  public function getFieldset(){
    return $this->_fieldset;
  }
  public function getForm(){
    return $this->_form;
  }
  public function code(){
    echo $this->_form . " " . $this->_fieldset
    . " " . $this->_text . " " . $this->_submit;
  }
}
$tab=new Form("form","fieldset");
$tab->setText("textaera");
$tab->setSubmit("submit");
$tab->code();

$tab1=new Form("form","fieldset");
$tab1->setText("textaera");
$tab1->setSubmit("submit");
$tab1->code();

 ?>
