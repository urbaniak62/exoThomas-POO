<?php
function chargerClasse ($classe) {
  // On inclue la classe correspondante au paramètre passé
  require $classe . '.class.php';
}
spl_autoload_register ('chargerClasse');


 ?>
