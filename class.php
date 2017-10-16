<?php
class form{
  private $_action;
  private $_methode;
  private $_code;

  public function __construct($action,$methode){
    $this->_action=$action;
    $this->_methode=$methode;
    $this->_code='<form methode="post" action="index.php">
    <fieldset></fielset></form>';
  }
  public function getText($type,$name){
    $this->_code="<input type='submit'","value='envoyer>'";
  }
}

 ?>
