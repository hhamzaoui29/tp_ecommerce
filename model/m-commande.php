<?php


function commande ($var)
{
    require ('connect.php');

    try {
        // Début de la transaction
        $pdo->beginTransaction();
        if(!isset($_SESSION['idcommande'])){
            $sql = 'INSERT INTO commande (id_client) VALUE (?)';
            $statement = $pdo->prepare($sql);
            $statement->execute([$_SESSION['idclient']]);
      
            $_SESSION['idcommande'] = $pdo->lastInsertId();
        } 
        // var_dump($var['idproduit']);die;
        
        $sql1 = 'INSERT INTO ligne_commande (quantite, id_produit, id_commande) VALUES(?,?,?)
                ON DUPLICATE KEY UPDATE quantite = quantite + ? ';
        $statement = $pdo->prepare($sql1);
        $statement->execute([$var['quantite'], $var['idproduit'], $_SESSION['idcommande'],$var['quantite']]);
        // on valid la transaction
        $pdo->commit();

    } catch (Exception $e) {
        $pdo->rollBack();
        // afficher le message 
        die($e->getMessage());
    }
    header('location:http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits');
}

function model_liste_commandes()
{
   require('connect.php');
   $sql = ('SELECT * FROM commande ');
   $statement = $pdo->prepare($sql);
   $statement->execute();
   $rows = $statement -> fetchAll();
   return $rows;

}

function model_panier($idc)
{
    require('connect.php');
    $sql = "SELECT  ligne_commande.quantite as quantiteCde,
                     produit.prix, produit.prix * ligne_commande.quantite as totalLigne,
                     produit.id_produit as idProduit, produit.nom as nomProduit
                     FROM ligne_commande
                     INNER JOIN produit ON produit.id_produit = ligne_commande.id_produit  
                     WHERE ligne_commande.id_commande = ?"; 

                $statement = $pdo->prepare($sql);
                $statement->execute([$idc]);
                $rows = $statement -> fetchAll();
                return $rows;
}
// reqêtte pour afficher les commande d'un client
 function model_liste_commande() {
    require('connect.php');
    $statement = $pdo->prepare("SELECT * FROM commande WHERE id_client = ? ");
    $statement->execute([$_SESSION['idclient']]);
    $rows = $statement -> fetchAll();
    return $rows;
 }

 // requette pour calculler le totale d'une facture 
 function model_total_Facture()
 {
    require('connect.php');
    $sql = "        SELECT  SUM(produit.prix * ligne_commande.quantite) as TotalCde
                    FROM ligne_commande
                    INNER JOIN produit        ON produit.id_produit   = ligne_commande.id_produit" ; 
                    
                $statement = $pdo->prepare($sql);
                $statement->execute([]);
                $rows = $statement -> fetchAll();
                return $rows;
 }
?>

