<?php

$path = $_SERVER['DOCUMENT_ROOT'];
include_once $path . '/init.php';
?>


<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= URL ?>/index.php">Home</a>
        </li>
       

        <?php if (!isset($_SESSION['user'])) : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>/src/Controller/AuthController.php?param=register">register</a>
        </li>

        
     
          <a href="<?= URL ?>/src/Controller/AuthController.php?param=login" class="btn btn-primary mx-2">Login </a>

          <?php else : ?> 

          <a href="<?= URL ?>/src/Controller/AuthController.php?param=logout" class="btn btn-primary">Logout</a>

          <?php if ($_SESSION['user']->role === 'Admin') : ?>

          <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>/src/Controller/UserController.php?param=liste_user">List users</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="<?= URL ?>/src/Controller/XpController.php?param=liste_xp">Liste Xp</a>
        </li>

        <?php endif ?>
      
          
          <?php endif ?>
      
        
      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>