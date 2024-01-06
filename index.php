<?php 
session_start();
define ('BASE', 'http://127.0.1.1/mes-projets/contoller-model-view/ecommerce');


$action = $_GET['action'];  
$tab = explode('/', $action ) ; 

$arg=NULL;
$controller = $tab[0];
$fonction = $tab[1];  
if (isset($tab[2])) {
    $arg = $tab[2];
}

require('controller/'.$controller.'.php') ;

if (isset($arg)) {
    $fonction($arg);  
} else {
    $fonction();
}  

?>