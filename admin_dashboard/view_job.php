<?php
include ("../config/config.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <title>Job</title>
    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">
    <style>

    </style>
  </head>

  <body>
   <?php include "dashboard_m.php"?>



    <div class="container-fluid">
      <?php include "dashboard_admin_nav_vertical.php"?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <?php $job = $bdd->query("SELECT * FROM job ");

?>
          <a href="create_jobs.php"><button class="btn btn-primary">Creer Job</button></a>

          <h2>Jobs</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead class="bg-light">
                <tr>
                    <th>Titre</th>
                    <th>Lieu</th>
                    <th>temps</th>
                    <th>DateDebut</th>
                    <th>dateLimit</th>
                    <th>Description</th>
                    <th>Image</th>

                    <th>Nom entreprise</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while ($donnees = $job->fetch()) {

    ?>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">

                            <div class="ms-3">
                                <p class="text-muted mb-0"><?php echo $donnees['titre'] ?></p>
                            </div>

                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['lieu'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['temps'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['dateDebut'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['dateLimit'] ?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['description_job']; ?></p>
                    </td>


                    <td>
                        <p class="text-muted mb-0"><img src="../images/<?php echo $donnees['photo']; ?>" class="image_ronde"></p>
                    </td>
                  
                    
                    <td>
                        <p class="text-muted mb-0">
                                                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $donnees['id_entreprise']?>">
                      Voir plus
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal-<?php echo $donnees['id_entreprise']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog  modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" >Entreprise</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                          <p class="text-muted mb-0"><?php 
                            $req=$bdd->query("SELECT * FROM entreprise");
                            while($res=$req->fetch()){
                              if($res['id']== $donnees['id_entreprise']){
                                echo $res['nom_entreprise'];
                              }
                            }
                          ?>
                          </p>

                        </p>
                         
                        </div>
                      </div>
                    </div>


                        </p>
                    </td>


                    <td>
                        <a href="edit_job.php?id= <?php echo $donnees['id']; ?>"><button type="button" class="btn btn-primary">
                            Edit
                        </button>
                        </a>
                    </td>
                </tr>
                <?php }?>


            </tbody>

            </table>
          </div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>
