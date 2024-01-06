<?php

function model_liste_ligne_commandes()
{
    require 'connect.php';

    $sql = ('SELECT id_commande, quantite, nom ,
                    (quantite*prix) as TotalLigne
                    FROM ligne_commande
                    INNER JOIN produit  ON ligne_commande.id_produit   = produit.id_produit');

    $statement = $pdo->prepare($sql);
    $statement->execute();
    $rows = $statement-> fetchAll();
    return $rows;
}

function model_ligne_commande($id)
{
    require 'connect.php';

    $sql = ('SELECT id_commande, quantite, nom ,
             (quantite*prix) as TotalLigne
             FROM ligne_commande
              INNER JOIN produit  ON ligne_commande.id_produit   = produit.id_produit  
             WHERE lingne_commande.id_ligne_commande = ?');
             
    $statement = $pdo->prepare($sql);
    $statement->execute([$id]);
    $row = $statement-> fetch();
    return $row;
}
?>