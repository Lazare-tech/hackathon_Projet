<?php 
include("../config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
         -->
         <link href="style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">
  
    <title>Profile utilisateur</title>
</head>

<body>
 <?php 
 include("bare_laterale.php") ?>

    <!-- references des utilisateurs  -->
   
    <?php $utilisateur=$bdd->prepare("SELECT * FROM register WHERE id= :id ");
   $utilisateur->execute([
    'id' => $_SESSION['id']
   ]);
   
   ?> 
   
   
   <div class="container-fluid">
      <?php include("vertical_menu.php")?>

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
           
          </div>
     
        <div class="table-responsive">
            <table class="table table-striped table-sm">
         
            <thead class="bg-info">
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Nom Utilisateur</th>
                    <th>Email</th>
                    <th>Contact</th>
                    <th>Formations</th>
                    <th>Ville</th>
                    <th>Promotions</th>

                    <th>ImageProfile</th>
                    <th>Actions</th>

                </tr>
            </thead>
            <tbody>
            <?php while($donnees= $utilisateur->fetch()){
                ?>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">

                            <div class="ms-3">
                                <p class="text-muted mb-0"><?php echo $donnees['Nom']?></p>
                            </div>

                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['Prenom']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['nom_utilisateur']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['Email']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['Contact']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['formation']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['ville']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><?php echo $donnees['promotion']?></p>
                    </td>
                    <td>
                        <p class="text-muted mb-0"><img src="../images/<?php echo $donnees['photo'];?>" class="image_ronde"></p>
                    </td>
                  
                    
                    <td>
                        <a href="editer_profile_aprenant_form.php?id= <?php echo $donnees['id'];?>"><button type="button" class="btn btn-primary">
                           Edit
                        </button>
                        </a>
                    </td>
                </tr>
                <?php }?>


            </tbody>
        </table>
            </main>
            </div>
    <!-- <--inser footer here-->
</body>

</html>