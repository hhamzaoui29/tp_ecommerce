<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LE E-Commerce</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <section class="d-grid gap-2 col-6 mx-auto container px-4 ">
    <a href="../../index.php" class="btn btn-outline-dark  ">
      <p class="display-4 fw-semibold">Dossier Racine</p>
    </a>
    <div class="d-grid gap-2 ">
      <?php
      if (!isset($_SESSION['idclient'])) { ?>
        <a href="http://127.0.1.1/php-procedural/ecommerce/login/f_login" class="btn btn-outline-dark  ">
          <p class="display-4 fw-semibold">Formulaire Se Connecter</p>
        </a>
      <?php } else { ?>
        <a href="http://127.0.1.1/php-procedural/ecommerce/logout.php" class="btn btn-outline-dark  ">
          <p class="display-4 fw-semibold">Deconnexion</p>
        </a>
      <?php  } ?>

      <a href="http://127.0.1.1/php-procedural/ecommerce/produit/liste_produits" class="btn btn-outline-dark ">
        <p class="display-4 fw-semibold">Liste Des Produits </p>
      </a>
      <a href="http://127.0.1.1/php-procedural/ecommerce/client/f_liste_clients" class="btn btn-outline-dark ">
        <p class="display-4 fw-semibold">Liste Des Clients</p>
      </a>
      <a href="http://127.0.1.1/php-procedural/ecommerce/ligne-commande/f_liste_ligne_commandes" class="btn btn-outline-dark ">
        <p class="display-4 fw-semibold">Liste Des Ligne_Commandes</p>
      </a>
      <a href="http://127.0.1.1/php-procedural/ecommerce/commande/f_liste_commandes" class="btn btn-outline-dark ">
        <p class="display-4 fw-semibold">Liste Des Commandes</p>
      </a>
      <a href="" class="btn btn-outline-dark ">
        <p class="display-4 fw-semibold"></p>
      </a>
    </div>
  </section>

</body>

</html>