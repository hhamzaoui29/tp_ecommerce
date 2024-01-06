<?php 




//http://127.0.1.1/php-procedural/ecommerce/login/f_login
function f_login()
{
  require ('view/login/login.php');
  // charger le formulaire du login (avec champ mail et password)
}
function login()
{
  require ('model/m-login.php');

  if (model_verify($_POST))
  {
      // echo "OK";
      // print_r(($_SESSION));
      header('location:'.BASE.'/produit/liste_produits');
  } else{
     echo " Bad Connexion"; 
  }
  
}

?>