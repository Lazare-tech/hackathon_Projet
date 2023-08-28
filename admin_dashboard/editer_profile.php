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

    <title>Job</title>
    <link href="style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">
  </head>

  <body>
   <?php include("dashboard_m.php")?>


    <div class="container-fluid">
      <?php include("dashboard_admin_nav_vertical.php")?>
 <?php $id_champ=$_SESSION['id'];
    if(isset($_GET['id'])){
        $id_champ= $_GET['id'];
    
    $edit= $bdd->prepare("SELECT * FROM register WHERE id= :id");
    $edit->execute([
        'id' => $id_champ
    ]);
    $resultat= $edit->fetch();
    //..........................................
    
    //..........................................
}
?>
<section class="background-radial-gradient overflow-hidden container">
    <div class="container   px-md-5 text-center text-lg-start my-5 edition_profile">
        <div class="row gx-lg-5 align-items-center mb-5">

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative justify-content-center">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-4 px-md-5">
                        <form action="editer_profile.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- <div class="row"> -->
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="Nom"
                                        value=" <?php echo $resultat['Nom']?>" />
                                    <label class="form-label" for="form3Example1">Nom</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="Prenom"
                                        value=" <?php echo $resultat['Prenom']?>" />
                                    <label class="form-label" for="form3Example2">Prenom</label>
                                </div>
                            </div>
                            <div class=" mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="nom_utilisateur"
                                        value="<?php echo $resultat['nom_utilisateur']?>" />
                                    <label class="form-label" for="form3Example2">Nom utilisateur</label>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" name="Email"
                                    value="<?php echo $resultat['Email']?>" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                            <div class="form-outline mb-4">
                                <input type="text" id="form3Example3" class="form-control" name="Contact"
                                    value="<?php echo $resultat['Contact']?>" />
                                <label class="form-label" for="form3Example3">Contact</label>
                            </div>
                          
                          
                               
                            <!-- Password input -->


                            <!-- Checkbox -->

                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
                                Enregister
                            </button>

                            <?php 
                            
                            if(isset($_POST['submit'])){ 
                                $Nom=$_POST['Nom'];
                                $Prenom=$_POST['Prenom']; 
                                $nom_utilisateur=$_POST['nom_utilisateur'];
                                $Email=$_POST['Email'];
                                $Contact= $_POST['Contact'];
                                $id=$id_champ;
                                $sql="UPDATE `register` SET `Nom`='$Nom',`Prenom`='$Prenom',`nom_utilisateur`='$nom_utilisateur',`Email`='$Email',`Contact`='$Contact' WHERE `id`='$id'";
                                 ; // $edit_update=$bdd->query("UPDATE Register SET firstname= $firstname ,lastname=
                                 // $lastname ,username= $username ,email= $email ,role_name= $role_name WHERE id= $id");
                                 $result= $bdd->query($sql);
                                if($result)
                                {
                                    //  var_dump($result);
                                   // header('Location:profile.php');
                                    header('Location: ./index.php');
                                    // echo "<script>alert("fonctionne");</script>"
                                               
                                }else
                                {
                                    echo "Error updated";
                                }
                            }
                                
                            ?>
                
                        </form>
                    </div>
                </div>
            </div>
        </div>
                        </div>
                        </div>
    </div>
</section>
</body>
</html>