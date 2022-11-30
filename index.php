<?php

include_once 'init.php';
include_once 'views/include/header.php';
include_once 'views/include/navbar.php';

$_SESSION['var'] = "je suis la";

// var_dump($_SESSION['user']->nom);
?>
<h1 class="text-center">Acceuil, Bienvenu : <?php
    if(isset($_SESSION['user'])){
        echo $_SESSION['user']->nom;
    }
?> </h1>



<?php 
include_once 'views/include/footer.php';
?>