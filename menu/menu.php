<?php

session_start();
try {
    $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', '',
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
    );
} catch (Exception $e) {
    die("Erreur " . $e->getMessage());
}
?>
  <nav>
    <div class="nav1">
      <div>
        <img class="fran" src="images/logo-franco.png" alt="">
      </div>
      <div class="toggle " style="padding-right: 30px
      ;">
        <i class="fa-solid fa-bars ouvrir"></i>
        <i class="fa-sharp fa-solid fa-xmark fermer"></i>
      </div>

      <ul class="onglets">
        <li><a href="index.php">Home</a></li>
        <li><a href="service1.php">Service</a></li>
        <li><a href="design.html">Design</a></li>
        <li><a href="contact.html">Contact</a></li>
        
      <?php 
        if(isset($_SESSION['nom_utilisateur'])){?>
          <div class="btn-group">
            <?php  echo  '<a href="dashboard_aprenant/profile.php"" class="text-white text-decoration-none">'.''.$_SESSION['nom_utilisateur'].'</a>';
                  ?>
                </div>
   <?php echo "<a href='../frondtEndAboubacar/Logout.php'><button class='btn btn-success'>Deconnexion</button></a>";
}else if(isset($_SESSION['nom_entreprise'])){?>
  <div class="btn-group">
    <?php  echo  '<a href="dashboard_aprenant/profile.php"" class="text-white text-decoration-none">'.''.$_SESSION['nom_entreprise'].'</a>';
          ?>
        </div>
<?php echo "<a href='../frondtEndAboubacar/Logout.php'><button class='btn btn-success'>Deconnexion</button></a>";

}else {?>
        
<a href="login_form.php" class="btn btn-warning btn-lg px-4 m-3">Se connecter</a>
<!-- <a href="register_form.php" class="btn btn-danger btn-lg px-4 m-3">Register Here</a> -->
                            <div class="btn-group">
        <button type="button" class="btn btn-danger btn-lg px-4 m-3 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            S'inscrire

        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="register_form_aprenant.php">Aprenant</a></li>
            <li><a class="dropdown-item" href="register_entreprise_form.php">Entreprise</a></li>

        </ul>
        </div>
      </ul>
      <div class="offf">
        <img class="auff" src="images/AUF.png" alt="">
      </div>
    </div>
    <!-- <?php }?> -->
  </nav>