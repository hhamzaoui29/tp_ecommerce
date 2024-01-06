<html>
    <!-- Condition pour afficher le panier -->
<?php
// print_r($_SESSION);
if (isset($_SESSION['idcommande'])) { ?>
    <a href="<?= BASE ?>/commande/f_panier/<?= $_SESSION['idcommande'] ?>"> Afficher Panier </a> </p>
<?php } ?>

<section>
    <h1> Liste Des Produits </h1>
    <a href="http://127.0.1.1/php-procedural/ecommerce/dashboard/f_dashboard "> Dashboard</a></td>
    <a href="<?= BASE ?>/produit/f_creer_produits">Nouveau</a> <a href="../logout.php"> Deconnexion </a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">Lebelle Produit </th>
                <th scope="col">Photo</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listeProduits as $produit) { ?>
                <tr>
                    <td><?= $produit['nom'] ?> </td>
                    <td><img src="../../images/<?= $produit['photo'] ?>" alt=""></td>
                    <td> <a href="<?=BASE?>/produit/f_un_produit/<?=$produit['id_produit']?>"> Detail Produit </a></td>
                    <td> <a href="<?= BASE ?>/produit/f_modifier_produit/<?= $produit['id_produit'] ?>"> Modifier</a></td>
                    <td> <a href="<?= BASE ?>/produit/f_supprimer_produit/<?= $produit['id_produit'] ?>"> Supprimer</a></td>
                    <input type="hidden" name="id" value="<?= $produit['id_produit'] ?>">
                </tr>

            <?php } ?>
        </tbody>
    </table>
</section>
</html>