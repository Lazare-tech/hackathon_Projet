<?php 
include("config/config.php");
?>
<nav class="navbar navbar-expand-lg bg-light navbar-light">
        <div class="container-fluid">
        <img class="fran" src="images/logo-franco.png" alt="">

            <!-- <i class="fas fa-child fa-3x" style="color: #fcaf3e;"></i> -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="./index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">SKILLS</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            PROJECTS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Project1</a></li>
                            <li><a class="dropdown-item" href="#">Project2></li>
                            <li><a class="dropdown-item" href="#">Project3</li>
                            <li><a class="dropdown-item" href="#">Project4></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">TEAM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">CONTACT</a>
                    </li>
                </ul>
                
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <span class="input-group-text text-white border-0" id="search-addon">
                        <i class="fas fa-search"></i>
                    </span>
                </form>
                <?php if(isset($_SESSION['nom_utilisateur'])){?>
    <div class="btn-group">
    <button type="" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  <?php  echo  '<a href="#" class="text-dark text-decoration-none">'.''.$_SESSION['nom_utilisateur'].'</a>';?>

    </button>
    <ul class="dropdown-menu">
      
      <li><a class="dropdown-item" href="../frontend/dashboard_aprenant/profile.php">Profile</a></li>
    
    </ul>
                </div>
   <?php echo "<a href='../Page_Connexion/Logout.php'><button class='btn btn-success'>Deconnexion</button></a>";

}?>
            </div>
        </div>
    </nav>