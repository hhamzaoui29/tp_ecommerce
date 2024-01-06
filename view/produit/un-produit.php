<html>
<section class="d-grid gap-2 col-6 mx-auto container px-4 ">   
    <div class="d-grid gap-2 ">
     <a href="<?=BASE?>/produit/liste_produits"> Retour à La Liste des produits </a>  
     <br><br>
     <img src="../../images/<?= $produit['photo'] ?>" class="figure-img img-fluid rounded" alt="">
     <br><br>
     
     <span> Description du produit : </span> <?= $produit['description'] ?>  
     <p> <strong><?= $produit['nom'] ?></strong> <a href="<?=BASE?>/commande/f_creer_commande/<?=$produit['id_produit']?>"> Acheter </a> </p>
     
      
        

  </div>      
 </section>

</html>