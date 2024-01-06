 <?php


 if(!isset($_SESSION['idclient'])){
  echo " Pas de client connecté, commande impossible"; 
}

 //http://127.0.1.1/php-procedural/ecommerce/commande/f_creer_commande
 function f_creer_commande($id)
 {
  require ('model/m-produit.php');
  $produit = model_un_produit($id);
     require ('view/commande/creer-commande.php'); 
 }
 function creer_commande()
 {
   require ('model/m-commande.php');
   commande($_POST);
 }

 //http://127.0.1.1/php-procedural/ecommerce/commande/f_liste_commandes
 function f_liste_commandes()
 {
     require ('model/m-commande.php');
     $commandes = model_liste_commande();
     require ('view/commande/liste-des-commandes.php');
 }
 //http://127.0.1.1/php-procedural/ecommerce/commande/f_panier
 function f_panier($id)
 {
    require ('model/m-commande.php');
    $paniers = model_panier($id);
    // $total_paniers = model_total_panier();
    require('view/commande/panier.php');
 }

 /*------------- Requêttes pour modifier et supprimer ---------------*/
 function model_modifier_commande($modifier)
 {

 }

 ?>