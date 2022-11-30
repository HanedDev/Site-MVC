<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

foreach ($errors as $message){
    echo '<p> . $message . </p>';
}

var_dump($_POST);
?>

<!-- html -->
<div class="container">
    <div>
        <?php
            foreach($errors as $message) :?>
     <div class="alert alert-danger" role="alert">
       <?= $message ?>
     </div>
            <?php endforeach ?>
    </div>
    <form action="<?= URL ?>/src/Controller/AuthController.php?param=register" method="post">

        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label> 
            <input type="text" class="form-control" id="nom" name="nom">
        </div>

        <div class="mb-3">
            <label for="prenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="prenom" name="prenom">
        </div>

        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <input type="text" class="form-control" id="adresse"name="adresse">
        </div>

        <div class="mb-3">
            <label for="ville" class="form-label">Ville</label>
            <input type="text" class="form-control" id="ville" name="ville">
        </div>

        <div class="mb-3">
            <label for="cp" class="form-label">Code postal</label>
            <input type="text" class="form-control" id="cp" name="cp">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <input type="text" class="form-control" id="Role" name="role">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


<?php
include_once ROOT . 'views/include/footer.php';
?>