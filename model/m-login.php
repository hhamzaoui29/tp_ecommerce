<?php 
function  model_verify($var)
{
  $_mail = $var['mail'];
  $_password = $var['password'];
 
  require ('connect.php');
  try {
      $sql = "SELECT * FROM client WHERE mail = ?";
      $statement = $pdo->prepare($sql);
      $statement->execute([$_mail]);
      $row = $statement->fetch();

      if($statement->rowCount() > 0) 
      { 
        if (password_verify($_password,$row['password'] ))
        {
          $_SESSION['idclient'] = $row['id_client'];
          header('location: '.BASE.'/dashboard/f_dashboard');
          
        } else {
          header('location: '.BASE.'/login/f_login');
      }
    }
  } catch (Exception $e) {
    $e->getMessage();
  }
} 
?>