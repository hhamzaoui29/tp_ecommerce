<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section>
        <a href="http://127.0.1.1/php-procedural/ecommerce/dashboard/f_dashboard "> Dashboard</a>
        <table class="table table-striped table-dark">
        <td> </td>
  <thead>
    <tr>
      <th scope="col">N° Commande </th>
      <th scope="col">Date Commande </th>
    </tr>
  </thead>
  <tbody>
    <?php 
  
    foreach ($commandes as $commande) { ?>
    <tr>
      
      <td><a href="<?=BASE?>/commande/f_panier/<?= $commande['id_commande'] ?>">  <?= $commande['id_commande'] ?>   </a> </td>
      <td><?=$commande['date_commande'] ?></td>
     
      <td> <a href=""> Modifier</a></td>
      <td> <a href=""> Supprimer</a></td>
    </tr>
    
    <?php }?>
  </tbody>
</table>
        </section>
    </body>
</html>