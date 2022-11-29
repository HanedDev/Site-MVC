<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';

include_once ROOT . 'views/include/navbar.php';


var_dump($_POST);
?>

<!-- html -->
<div class="container">
    <form action="<?= URL ?>/src/Controller/XpController.php?param=ajouter_xp" method="post">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="mb-3">
            <label for="niveau" class="form-label">Niveau</label>
            <input type="text" class="form-control" id="niveau" name="niveau">
        </div>

        <div class="mb-3">
            <label for="score" class="form-label">Score</label>
            <input type="text" class="form-control" id="score"name="score">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


<?php
include_once ROOT . 'views/include/footer.php';
?>