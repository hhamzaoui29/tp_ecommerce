<html>

<head>

</head>

<body>
  <section>
    <td> <a href="http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits "> liste produit</a></td>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Identifiant Produit </th>
          <th scope="col">Libelle Produit </th>
          <th scope="col">Quantité Commandé</th>
          <th scope="col">Prix Produit</th>
          <th scope="col">Total panier</th>
        </tr>
      </thead>
      <tbody>
      
        <?php 
           $totalCammnde  = 0;
           foreach ($paniers as $panier) { ?>
           
            <td><?= $panier['nomProduit'] ?></td>
            <td><?= $panier['quantiteCde'] ?></td>
            <td><?= $panier['prix'] ?></td>
            <td><?= $panier['totalLigne'] ?></td>
            <td> <a href=""> Modifier</a></td>
            <td> <a href=""> Supprimer</a></td>
            <?php $totalCammnde = $totalCammnde  +  $panier['totalLigne']; ?>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="2">Total Commande </td>
          <td><?= $totalCammnde?></td>
        </tr>
    </table>
  </section>

</body>

</html>