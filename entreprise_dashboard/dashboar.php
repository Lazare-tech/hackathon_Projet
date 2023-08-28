<?php 
include("../config/config.php"); 

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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
       crossorigin="anonymous"></script>

    <title>Entreprise</title>
    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">
  </head>

  <body>
   <?php include("bare_laterale.php")?>


    <div class="container-fluid">
      <?php include("vertical_menu.php")?>
        <!-- <a href="creation_entreprise.php"><button class="btn btn-primary">Cree</a> -->
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

          <?php $entreprise=$bdd->prepare("SELECT * FROM entreprise WHERE id= :id ");
       

            $entreprise->execute([
              'id' => $_SESSION['id']
            ])
          ?>

          <h2>Entreprise</h2>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
            <thead class="bg-light">
                <tr>
                    <th>Nom entreprise</th>
                    <th>Description</th>
                    <th>Email</th>

                    <th>photo</th>
                   
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php while($donnees= $entreprise->fetch()){
                ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">

                            <div class="ms-3">
                                <p class="text-muted mb-0"><?php echo $donnees['nom_entreprise']?></p>
                            </div>

                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['description_entreprise']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['email']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><img src="../images/<?php echo $donnees['photo']?>" class="image_ronde"></p>
                    </td>
                    
                    <td>
                        <a href="editer_profile_entreprise.php?id= <?php echo $donnees['id'];?>"><button type="button" class="btn btn-primary">
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
   
  </body>
</html>
