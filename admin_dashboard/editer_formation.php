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
    
    <title>Edition profile</title>
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
    
    $edit= $bdd->prepare("SELECT * FROM Formations WHERE id= :id");
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
                <h3>Editer formation</h3>
                <div class="card bg-glass">
                    <div class="card-body px-4 py-4 px-md-5">
                        <form action="editer_formation.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- <div class="row"> -->
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="titre"
                                        value=" <?php echo $resultat['titre']?>" />
                                    <label class="form-label" for="form3Example1">Titre</label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-outline">
                                        <textarea class="form-control" rows="3" name="description">
                                        <?php echo $resultat['description_formation']?> 
                                    </textarea>

                                    <label class="form-label" for="form3Example2">Description</label>
                                </div>
                            </div>
                          
                            <div class=" mb-4">
                                <div class="form-outline">
                                    <input type="file" id="form3Example2" class="form-control" name="photo"
                                        value="<?php echo $resultat['photo']?>" />
                                    <label class="form-label" for="form3Example2">Image entreprise</label>
                                </div>
                            </div>
                            <!-- Password input -->

                            <!-- Checkbox -->

                            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">
                                Enregister
                            </button>

                            <?php 
                            
                            if(isset($_POST['submit'])){ 
                                $titre=$_POST['titre'];
                                $description=$_POST['description']; 
                                $photo= $_POST['photo'];
                                $id=$id_champ;
                                $sql="UPDATE `Formations` SET `titre`='$titre',`description_formation`='$description',`photo`='$photo' WHERE `id`='$id' ";
                                  $result= $bdd->query($sql);
                                if($result)
                                {
                                     var_dump($result);
                                   // header('Location:profile.php');
                                    // header('Location: ./index.php');
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