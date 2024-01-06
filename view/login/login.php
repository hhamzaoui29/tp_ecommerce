<html>
    <head>
    <meta name="charset" content="UTF-8">
    </head>
    <body>
        <form action="<?= BASE ?>/login/login" method="post">
          <input type="hidden" name=" idclient">
          <label for="mail">EMAIL</label>
          <input type="text" name=" mail" placeholder="Saisissez Votre E-mail ">
          <label for="password">Password</label>
          <input type="text" name="password" placeholder="Saisissez Votre Mot De Passe">
          <input type="submit" value="Valider">
        </form>
    </body>
</html>