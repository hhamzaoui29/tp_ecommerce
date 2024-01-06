<?php
//http://127.0.1.1/php-procedural/ecommerce/ligne-commande/f_liste_ligne_commandes
  function f_liste_ligne_commandes()
  {
    require('model/m-ligne-commande.php');
    $ligne_commandes = model_liste_ligne_commandes();
    require 'view/ligne-commande/liste-ligne-commandes.php'; 
  }

?>