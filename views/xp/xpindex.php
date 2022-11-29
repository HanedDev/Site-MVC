<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT .'views/include/navbar.php';

?>

<!-- ici code html -->
<h1>xp index</h1>
<button type="button" class="btn btn-warning"><a class="nav-link" href="<?= URL ?>/src/Controller/XpController.php?param=ajouter_xp">Ajouter xps</a></button>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Niveau</th>
      <!-- <th scope="col">Handle</th> -->
      <th scope="col">Score</th>
     
    </tr>
  </thead>
  <tbody>

    <?php foreach ($xps as $xp) : ?>

  <tr>
      <th scope="row"><?= $xp->id ?></th>
      <td><?= $xp->name ?></td>
      <td><?= $xp->niveau ?></td>
      <td><?= $xp->score ?></td>
      
    </tr>

    <?php endforeach ?>

  </tbody>
</table>

<!-- fin hmtl -->

<?php 
include_once ROOT .'views/include/footer.php';
?>