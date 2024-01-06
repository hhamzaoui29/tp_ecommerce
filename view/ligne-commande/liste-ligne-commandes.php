<html>
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section>
          <td> <a href="http://127.0.1.1/php-procedural/ecommerce/dashboard/f_dashboard "> Dashboard</a></td>
        <table class="table table-striped table-dark">
  <thead>
    <tr>
      
        <th scope="col">N° Commande</th>
      <th scope="col">Libelle Produit</th>
      <th scope="col"> Quantite</th>
      <th scope="col">Total Ligne</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($ligne_commandes as $ligne_commande) { ?>
    <tr>
      <td><?=$ligne_commande['id_commande'] ?></td>
      <td><?=$ligne_commande['nom'] ?></td>
      <td><?=$ligne_commande['quantite'] ?></td>
      <td><?=$ligne_commande['TotalLigne'] ?></td>
      <td> <a href="../../images/trash.png"> Modifier</a></td>
      <td> <a href="../../images/trash.png"> Supprimer</a></td>
    </tr>
    <?php }?>
  </tbody>
</table>
        </section>
    </body>
</html>