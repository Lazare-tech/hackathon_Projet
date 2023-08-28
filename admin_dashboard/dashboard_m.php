<?php session_start()?>
<nav class="navbar navbar-dark sticky-top bg-info flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">ADMIN</a>
      <input class="form-control form-control-dark w-20" type="text" placeholder="Search" aria-label="Search">
      <!-- <ul class="navbar-nav px-3"> -->
      <div class="d-flex align-items-center">

      <?php 
      if($_SESSION['nom_utilisateur']){
          echo $_SESSION['nom_utilisateur']?>
            <a href="../../././frondtEndAboubacar/Logout.php"><button class="btn btn-success">Deconnexion</button></a>
            <?php } ?>

      <!-- </ul> -->
      </div>
    </nav>