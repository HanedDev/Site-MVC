<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT .'views/include/navbar.php';

?>

<!-- ici code html -->
<h1>User index</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <!-- <th scope="col">Handle</th> -->
      <th scope="col">Adresse</th>
      <th scope="col">Code Postal</th>
      <th scope="col">Adresse Email</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>

    <?php foreach ($users as $user) : ?>

  <tr>
      <th scope="row"><?= $user->id ?></th>
      <td><?= $user->nom ?></td>
      <td><?= $user->prenom ?></td>
      <td><?= $user->adresse ?></td>
      <td><?= $user->ville ?></td>
      <td><?= $user->cp ?></td>
      <td><?= $user->email ?></td>
      <td><?= $user->password ?></td>
      <td><?= $user->role ?></td>
    </tr>

    <?php endforeach ?>

  </tbody>
</table>

<!-- fin hmtl -->

<?php 
include_once ROOT .'views/include/footer.php';
?>