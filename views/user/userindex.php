<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT .'views/include/navbar.php';

$indice=1;
?>

<!-- ici code html -->
<h1>User index</h1>
<button type="button" class="btn btn-warning"><a class="nav-link" href="<?= URL ?>/src/Controller/UserController.php?param=ajouter_user">Ajouter users</a></button>

<div class="container">


<table class="table">
  <thead>
    <tr class="col">
      <th scope="col">ID</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <!-- <th scope="col">Handle</th> -->
      <th scope="col">Adresse</th>
      <th scope="col">Ville</th>
      <th scope="col">Code Postal</th>
      <th scope="col">Adresse Email</th>
      <th scope="col">Mot de passe</th>
      <th scope="col">Role</th>

    </tr>
  </thead>
  <tbody>

    <?php foreach ($users as $user) : ?>

  <tr class="col">
      <th scope="row"><?php echo $indice ; $indice++ ?></th>
      <td><?= $user->nom ?></td>
      <td><?= $user->prenom ?></td>
      <td><?= $user->adresse ?></td>
      <td><?= $user->ville ?></td>
      <td><?= $user->cp ?></td>
      <td><?= $user->email ?></td>
      <td class="col"><?= $user->password ?></td>
      <td><?= $user->role ?></td>
      
      

      <td class="col">

      <div class="row align-items-start">
       <a href="<?= URL ?>/src/Controller/UserController.php?param=delete_user&id=<?= $user->id ?>" class="btn btn-danger">Supprimer</a>
      
        <a href="<?= URL ?>/src/Controller/UserController.php?param=detail_user&id=<?= $user->id ?>" class="btn btn-info">Voir détail</a>
    
        <a href="<?= URL ?>/src/Controller/UserController.php?param=edit_user&id=<?= $user->id ?>" class="btn btn-success">Editer</a>
      </td>
      </div>
      
    </tr>

    <?php endforeach ?>

  </tbody>
</table>

</div>
<!-- fin hmtl -->

<?php 
include_once ROOT .'views/include/footer.php';
?>