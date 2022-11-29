<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';

include_once ROOT . 'views/include/header.php';
include_once ROOT . 'views/include/navbar.php';

?>

<h1><?= $user->prenom ?></h1>

<?php 
include_once ROOT .'views/include/footer.php';
?>