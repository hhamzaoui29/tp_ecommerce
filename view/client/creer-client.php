<html>
    <head>
    <meta name="charset" content="UTF-8">
    </head>

<body>
<section class="d-grid gap-2 col-6 mx-auto container px-4 " >
    <!-- Bouton Retour a la page Liste-Des-Acteurs -->
    <a href="<?=BASE?>/client/f_liste_clients" method="post" class="btn btn-info btn-sm"> Retour  </a>
    
    
    <form action="<?=BASE?>/client/creer_client" method="post" method="POST">
        <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledTextInput" class="form-label">Saisissez Votre Nom</label>
            <input type="text" name=" nom" placeholder="Saisissez Votre Nom ">
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez Votre Prenom</label>
            <input type="text" name=" prenom" placeholder="Saisissez Votre Prenom ">
        </div>
         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez Votre E-mail</label>
            <input type="text" name=" mail" placeholder="Saisissez Votre E-mail ">
        </div>

         <div class="mb-3" class="card" style="width: 18rem;">
            <label for="disabledSelect" class="form-label">Saisissez Votre Mot De Passe</label>
            <input type="text" name="password" placeholder="Saisissez Votre Mot De Passe">
        </div>
        <div class=" modal-dialog-centered d-grid gap-2 ">
            <input type="submit" class=" btn btn-success" value="Enregistrer"></input>
       </div>
    </form>
</section>
</body>

</html>
       