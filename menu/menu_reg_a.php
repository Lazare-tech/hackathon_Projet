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
        
      
      <div class="offf">
        <img class="auff" src="images/AUF.png" alt="">
      </div>
    </div>
  </nav>