<?php

/*-- Client --*/
//Requêtte pour créer un client
 function model_creer_client($var)
 {
    $_nom = $var['nom'];
    $_prenom = $var['prenom'];
    $_mail = $var['mail'];
    $_password = $var['password'];
     // cryptage du password avec la fonction password_hash
     $password_hash = password_hash($_password, PASSWORD_DEFAULT);
    require('connect.php');
    $sql = ('INSERT INTO client (nom, prenom, mail, password) VALUES(?, ?, ?, ?)');
    $statement = $pdo->prepare($sql);
    $statement->execute([$_nom, $_prenom, $_mail, $password_hash]);
    header("location: http://127.0.1.1/php-procedural/ecommerce/client/f_liste_clients");
 }

//  Requêtte pour lister tous les clients
 function model_liste_clients()
 {
   require('connect.php');
   $sql = "SELECT * FROM client ";
   $statement = $pdo->prepare($sql);
   $statement->execute();
   $rows = $statement->fetchAll();
   return $rows;
 }

// Requêtte pour liste un client
 function model_un_client($id)
 {
   require('connect.php');
   $sql = "SELECT * FROM client WHERE id_client = ?";
   $statement = $pdo->prepare($sql);
   $statement->execute([$id]);
   $row = $statement->fetch();
   return $row;
 }

//Requêtte pour modifier un client
 function model_modifier_client($modifier)
 {
 
  $_id     = $modifier['id']; 
  $_nom    = $modifier['nom'];
  $_prenom = $modifier['prenom'];
  $_mail  = $modifier['mail'];

  require('connect.php');
  $req = ('UPDATE client SET nom = ?, prenom = ?, mail = ? WHERE id_client = ? ');
  $statement = $pdo->prepare($req);
  $statement->execute([$_nom, $_prenom, $_mail, $_id ]);  
  header("location:http://127.0.1.1/php-procedural/ecommerce/client/f_liste_clients");
 }

// Requêtte de suppression
function model_supprimer_client($id) 
{
  require ('connect.php');
  $sql = ('DELETE FROM client WHERE id_client = ? ');
  $statement = $pdo->prepare($sql);
  $statement->execute([$id]);
  var_dump([$id]);
   header("location:http://127.0.1.1/php-procedural/ecommerce/client/f_liste_clients");
}

 
?>