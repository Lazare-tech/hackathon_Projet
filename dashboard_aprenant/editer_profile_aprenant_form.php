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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        
        <link href="bootstrap.min.css" rel="stylesheet"> -->
        <title>Edition profile</title>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/dashboard.css" rel="stylesheet">
 

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
   <?php include("bare_laterale.php")?>

   <div class="container-fluid">
      <?php include("vertical_menu.php")?>
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
    <div class="container   px-md-5 text-center text-lg-start my-5 edition_profile">
        <div class="row gx-lg-5 align-items-center mb-5">

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative justify-content-center">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-4 px-md-5">
                        <form action="editer_profile_aprenant_form.php" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- <div class="row"> -->
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="Nom"
                                        value=" <?php echo $resultat['Nom']?>" />
                                    <label class="form-label" for="form3Example1">Nom </label>
                                </div>
                            </div>
                            
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="Prenom"
                                        value=" <?php echo $resultat['Prenom']?>" />
                                    <label class="form-label" for="form3Example1">Prenom </label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="nom_utilisateur"
                                        value=" <?php echo $resultat['nom_utilisateur']?>" />
                                    <label class="form-label" for="form3Example1">Nom utilisateur</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="email" id="form3Example1" class="form-control" name="Email"
                                        value=" <?php echo $resultat['Email']?>" />
                                    <label class="form-label" for="form3Example1">Email</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example1" class="form-control" name="Contact"
                                        value=" <?php echo $resultat['Contact']?>" />
                                    <label class="form-label" for="form3Example1">Contact</label>
                                </div>
                            </div>
                            <div class="mb-4">
                            <select class="form-select" aria-label="Default select example" name="formation">
                   
                   <option selected><?php echo $resultat['formation']?></option>
                   <?php 
                     $formation=$bdd->query("SELECT * FROM FFormations");
                     while($donnees=$formation->fetch()){?>
                       <option>
                           <?php echo $donnees['nom_formation'];?>
                       </option>

                    <?php }?>
                   
                   
                 </select>
                 <label class="form-label" for="form3Example1">Formations</label>

                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                <select class="form-select" aria-label="Default select example" name="ville">
                      <option selected><?php echo $resultat['ville']?></option>
                      <?php 
                        $ville=$bdd->query("SELECT * FROM Ville");
                        while($donnees=$ville->fetch()){?>
                          <option>
                              <?php echo $donnees['nom_ville'];?>
                          </option>

                       <?php }?>
                    </select>
                    <label class="form-label" for="form3Example1">Ville</label>

                    <select class="form-select" aria-label="Default select example" name="promotion">
                      <option selected><?php echo $resultat['promotion'];?></option>
                      <?php 
                        $promotion=$bdd->query("SELECT * FROM Promotions");
                        while($donnees=$promotion->fetch()){?>
                          <option>
                              <?php echo $donnees['date'];?>
                          </option>

                       <?php }?>
                    </select>
                    <label class="form-label" for="form3Example1">Promotions</label>

                                

                                  
                                </div>
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

                                $Email= $_POST['Email'];
                                // $photo= $_POST['photo'];
                                $Contact= $_POST['Contact'];
                                $formation =$_POST['formation'];
                                $promotion = $_POST['promotion'];
                                $ville = $_POST['ville'];

                                $id=$id_champ;
                                $sql="UPDATE `register` SET `Nom`='$Nom',`Prenom`='$Prenom',`nom_utilisateur`='$nom_utilisateur', `Email`='$Email' ,`Contact`='$Contact',`formation`='$formation', `ville`='$ville', `promotion`='$promotion' WHERE `id`='$id' ";
                                  // $edit_update=$bdd->query("UPDATE Register SET firstname= $firstname ,lastname=
                                 // $lastname ,username= $username ,email= $email ,role_name= $role_name WHERE id= $id");
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
                        </div>
</body>
</html>