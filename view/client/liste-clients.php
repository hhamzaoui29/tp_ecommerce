<html>

<head>

</head>

<body>
  <section>
    <td> <a href="<?=BASE?>/dashboard/f_dashboard "> Dashboard</a></td>
    <td> <a href="<?=BASE?>/client/f_creer_client"> Nouveau Client</a></td>
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Non Client </th>
          <th scope="col">Prenom Client</th>
          <th scope="col">Adresse E-Mail Client</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($clients as $client) { ?>
          <tr>
            <td><?= $client['nom'] ?></td>
            <td><?= $client['prenom'] ?></td>
            <td><?= $client['mail'] ?></td>
            <td> <a href="<?=BASE?>/client/f_modifier_client/<?= $client['id_client']?>"> Modifier</a></td>
            <td> <a href="<?=BASE?>/client/f_supprimer_client/<?= $client['id_client'] ?>"> Supprimer</a></td>
            <input type="hidden" name="idclient" value="<?= $client['id_client'] ?>">
            <!-- < ?php echo $client['id_client'];?> -->
            <td> <a href=""> Liste Des Commandes</a></td>
          </tr>

        <?php } ?>
      </tbody>
    </table>
  </section>
</body>

</html>