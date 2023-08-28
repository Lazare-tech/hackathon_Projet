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
        <li><a href="formation.php">Formations</a></li>
        <li><a href="trouveruncanditat.php">Aprenants</a></li>
        <li><a href="trouvezundjob.php">Jobs</a></li>
        
      <?php 
        if(isset($_SESSION['nom_utilisateur'])){?>
          <div class="btn-group">
            <?php  echo  '<a href="dashboard_aprenant/profile.php"" class="u" style="color:wheat;">'.''.$_SESSION['nom_utilisateur'].'</a>';
                  ?>
                </div>
   <?php echo '<a href="../frondtEndAboubacar/Logout.php"" ><button class="b" style="background-color:#4CAF50;;padding:5px;cursor:pointer;font-size:16px;border:none" >Deconnexion</button></a>';
}else if(isset($_SESSION['nom_entreprise'])){?>
  <div class="btn-group"> 
    <?php  echo  '<a href="dashboard_aprenant/profile.php"" class="text-white text-decoration-none">'.''.$_SESSION['nom_entreprise'].'</a>';
          ?>
        </div>
<?php echo "<a href='../frondtEndAboubacar/Logout.php' class='b'><button class=''>Deconnexion</button></a>";

}else {?>
        
<a href="login_form.php" class="s px-4 m-3">Se connecter</a>
                            <div class="btn-group">
      
        <div class="dropdown">
  <button class="dropbtn">S'inscrire</button>
  <div class="dropdown-content">
  <a class="m" href="register_form_aprenant.php">Aprenant</a>
  <a class="m" href="register_entreprise_form.php">Entreprise</a>

  </div>
</div>
        
          
        </div>
      </ul>
      <div class="offf">
        <img class="auff" src="images/AUF.png" alt="">
      </div>
    </div>
    <?php }?> 
  </nav>