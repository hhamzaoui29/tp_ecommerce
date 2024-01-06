<html>
    <head>
      <meta name="charset" content="UTF-8">
    </head>
    
    <form action="<?=BASE?>/produit/creer_produits" method="post">
    <input type="text"   name="nom"  placeholder="Tapez nom Produit">
    <input type="text"   name="description"  placeholder="description Produit">
    <input type="text"   name="photo"  placeholder="Inserez La photo Du Produit">
    <input type="number" name="prix"  placeholder="1.0" step="0.01" min="0" max = "1000">
    <input type="submit" value="Enregistrez" >
</form>
</html>