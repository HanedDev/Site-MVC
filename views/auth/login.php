<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';

foreach ($errors as $message){
    echo '<p> . $message . </p>';
}

// var_dump($_POST);
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
    <form action="<?= URL ?>/src/Controller/AuthController.php?param=login" method="post">

     

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email">
        </div>


        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

      

        <button type="submit" class="btn btn-primary">Connect</button>

    </form>
</div>


<?php
include_once ROOT . 'views/include/footer.php';
?>