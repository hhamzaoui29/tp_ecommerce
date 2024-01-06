<?php

//route d'affichage du formulaire de creation de produit
//http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits
function liste_produits()
 {
    require('model/m-produit.php');
    $listeProduits = model_liste_produits();
    require ('view/produit/liste-des-produits.php');
 }

 /*-------------- Un Produit -------------------*/
function f_un_produit($id)
{
   require('model/m-produit.php');
   $produit = model_un_produit($id);
   require ('view/produit/un-produit.php');
}

//http://127.0.1.1/php-procedural/ecommerce/produit/f_creer_produit
function f_creer_produits()
{
    require 'view/produit/creer-produit.php';
}
function creer_produits()
{
    require'model/m-produit.php';
    model_creer_produits($_POST);
}
//http://127.0.1.1/php-procedural/ecommerce/produit/f_modifier_produit
 function f_modifier_produit($id)
 {
    require ('model/m-produit.php');
     $produit = model_un_produit($id); 
     require ('view/produit/modifier-produit.php'); 
 }
 function modifier_produit()
 {
    require ('model/m-produit.php');
    model_modifier_produit($_POST);   
 }
//http://127.0.1.1/php-procedural/ecommerce/produit/f_supprimer_produit
 function f_supprimer_produit($id)
 {
    require ('model/m-produit.php');
    model_supprimer_produit($id); 
 }
?> 