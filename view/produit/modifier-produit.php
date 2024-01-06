<html>
    <head>
    <meta name="charset" content="UTF-8">
    </head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 " >
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <a href="<?=BASE?>/produit/liste_produits" method="post" class="btn btn-info btn-sm"> Retour  </a>
    
    <form action="<?=BASE?>/produit/modifier_produit" method="post" method="POST">
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledTextInput" class="form-label">Saisissez Le Nom du produit</label>
            <input type="text" name=" nom" value="<?= $produit['nom'] ?>"  class="form-control" >
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez La description produit</label>
            <input type="text" name=" description" value="<?= $produit['description'] ?>"  class="form-control" >
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez La Photo du Produit</label>
            <input type="text" name="photo" value="<?= $produit['photo'] ?>"  class="form-control" >
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez Le Prix Produit</label>
            <input type="text" name=" prix" value="<?= $produit['prix'] ?>"  class="form-control" >
        </div>
        <div >
            <input type="hidden" name="idproduit" value="<?= $produit['id_produit']?>">
        </div>
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <input type="submit" class=" btn btn-success" value="Enregistrer"></input>
       </div>
    </form>
</section>
</body>

</html>