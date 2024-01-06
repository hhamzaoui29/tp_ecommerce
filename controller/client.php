<?php
require ('model/m-commande.php');
/*-------------------- Client ---------------------------*/
//http://127.0.1.1/php-procedural/ecommerce/client/f_liste_clients
function f_liste_clients()
{
  require ('model/m-client.php');
  $clients = model_liste_clients();
  require ('view/client/liste-clients.php');
}
//http://127.0.1.1/php-procedural/ecommerce/client/f_creer_client
function f_creer_client()
{
  require ('view/client/creer-client.php');
}
function creer_client()
{
  require ('model/m-client.php');
  model_creer_client($_POST);
  // header('location:'.BASE.'/client/f_liste_client');
}
//http://127.0.1.1/php-procedural/ecommerce/client/f_modifier_client
function f_modifier_client($id) // c'est la fonction  appelé par le controller
{
    require('model/m-client.php');
    $client = model_un_client($id);
    // require 'view/menu/nav-bar.php';
    require('view/client/modifier-client.php');
}
function modifier_client()
{
  require ('model/m-client.php');
  model_modifier_client($_POST);
}

//http://127.0.1.1/php-procedural/ecommerce/client/f_supprimer_client
function f_supprimer_client($id)
{
  require ('model/m-client.php');
  model_supprimer_client($id);
}


//http://127.0.1.1/php-procedural/ecommerce/client/f_liste_commandes
function f_liste_commandes()
{
    require('view/commande/liste-commandes-client.php');
}
?>