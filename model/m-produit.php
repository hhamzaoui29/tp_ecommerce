<?php

  function model_creer_produits($new)
  {
    require 'connect.php';

    $_nom         = $new['nom'];
    $_description = $new['description'];
    $_photo       = $new['photo'];
    $_prix        = $new['prix'];

    $sql = " INSERT INTO produit (nom, description, photo, prix) VALUES(?,?,?,?)" ;
    $statement = $pdo->prepare($sql);
    $statement->execute([$_nom, $_description, $_photo, $_prix]);
    header('location:http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits');
  }

  function model_liste_produits()
  {
    require ('connect.php');
    $sql = ('SELECT * FROM produit ');
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $rows = $statement->fetchAll();
    return $rows;
  }

/*----------- Un produit -------------*/
function model_un_produit($id)
  {
    require ('connect.php');
    $sql = ('SELECT * FROM produit WHERE id_produit = ?');
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $row = $statement->fetch();
    return $row;
  }
function model_modifier_produit($modifier)
{
  $_nom = $modifier['nom'];
  $_description = $modifier['description'];
  $_photo = $modifier['photo'];
  $_prix = $modifier['prix'];
  $_id = $modifier['idproduit'];

  require ('connect.php');
    $sql = ('UPDATE  produit SET nom = ?, description = ?, photo = ?, prix = ?  WHERE id_produit = ?');
    $statement = $pdo->prepare($sql);
    $statement->execute([$_nom, $_description, $_photo, $_prix, $_id]);
    header('location:http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits');
}

// Requêtte de suppression pour la ligne de commande et le produi car y a une relation entre eux
function model_supprimer_produit($id) 
{
  require ('connect.php');
  try {
  $pdo -> beginTransaction();
 echo "salut";
  $sql1 = ('DELETE FROM ligne_commande WHERE id_produit = ? ');
  $statement1 = $pdo->prepare($sql1);
  $statement1->execute([$id]);
  /**
   * la premiere requêtte permet de selectionner id_produit de la table ligne_commade pour le supprimer  
   */
  echo "salut1";
  $sql2 = ('DELETE FROM produit WHERE id_produit = ? ');
  $statement2 = $pdo->prepare($sql2);
  $statement2->execute([$id]);
  /**
   * la deuxieme  requêtte permet de selectionner id_produit de la table produit pour le supprimer  
   */
  $pdo -> commit();
  echo "salut3";
  } catch (Exception $e) {
    $pdo -> rollBack();
    die($e -> getMessage());
  }
  
   header('location:http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits');
}
  
?>