<html>
    <head>
    <meta name="charset" content="UTF-8">
    </head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 " >
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <form action="<?=BASE?>/commande/creer_commande" method="post" method="POST">
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledTextInput" class="form-label">Saisissez la Quantité</label>
            <input type="number" name="quantite" step="1" min="0" max = "10">

            <input type="hidden" name="idproduit" value="<?=$produit['id_produit']?>">
            <input type="submit" class=" btn btn-success" value="Acheter"></input>
        </div>
    </form>
</section>
</body>

</html>