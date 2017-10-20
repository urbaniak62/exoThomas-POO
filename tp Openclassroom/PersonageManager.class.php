<?php
include_once('connection.class.php');
  class PersonageManager
  {
    public $_bdd;


// -------constructeur

    public function __construct($bdd){
        $this->_bdd=$bdd;

}
// ---------------INSERTIoN dans base de donné

    public function insertion(Personnage $insert){
      $req=connection()-> prepare('INSERT INTO personnages(nom,degats)
        VALUES(:nom,:degats)');

        $req->execute (array(
  'nom'=>$insert->getNom(),
  'degats'=>$insert->getDegats()
  ));
}


// ---------------RECUPERER dans la bdd par

//     public function read(){
//       $req=connection()->query("UPDATE * FROM personnages");
// $donne= $req->fetchAll();
//
// return $donne;
//
//     }

// ---------------MISE a jour dans la base de donné

//     public function update(personnage $personage){
//
//   return $donne;
//     }

// }
// ---------------suprime un objet de la bdd

    // public function delete(perssonage $personage){
    //
    // }
    public function setBdd($bdd){
    $this->_bdd=$bdd;
  }

  public function getBdd(){
    return $this->_bdd;
  }

  }



 ?>
