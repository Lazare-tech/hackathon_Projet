<?php 
session_start();
try{
    $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>

    <title>Editer</title>
</head>
<?php include("admin_menu.php");
    // $id_champ=$_SESSION['id'];
    if(isset($_GET['id'])){
        $id_champ= $_GET['id'];
    $roles=$bdd->query("SELECT role FROM Role ");
    
    $edit= $bdd->prepare("SELECT firstname,lastname,username,email,role_name FROM Register WHERE id= :id");
    $edit->execute([
        'id' => $id_champ
    ]);
    $resultat= $edit->fetch();
}
?>
<section class="background-radial-gradient overflow-hidden container">


    <div class="container   px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative justify-content-center">
                <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                <div class="card bg-glass">
                    <div class="card-body px-4 py-4 px-md-5">
                        <form action="" method="post">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <!-- <div class="row"> -->
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="tex" id="form3Example1" class="form-control" name="firstname"
                                        value=" <?php echo $resultat['firstname']?>" />
                                    <label class="form-label" for="form3Example1">First name</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="lastname"
                                        value=" <?php echo $resultat['lastname']?>" />
                                    <label class="form-label" for="form3Example2">Last name</label>
                                </div>
                            </div>
                            <div class=" mb-4">
                                <div class="form-outline">
                                    <input type="text" id="form3Example2" class="form-control" name="username"
                                        value="<?php echo $resultat['username']?>" />
                                    <label class="form-label" for="form3Example2">Username</label>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="form3Example3" class="form-control" name="email"
                                    value="<?php echo $resultat['email']?>" />
                                <label class="form-label" for="form3Example3">Email address</label>
                            </div>
                          
                            <select class="form-select" aria-label="Default select example" name="role">
                            <option selected value="<?php echo $resultat['role_name'];?>">
                            
                            <?php echo $resultat['role_name'];?>
                            </option>
                            
                            <?php while ($role_name=$roles->fetch()){?>

                                    <option value="<?php echo $role_name['role']; ?> ">
                                
                                            <?php echo $role_name['role']; ?>
                                    </option>
                            
                           <?php }?> 


                            </select>
                               
                            <!-- Password input -->


                            <!-- Checkbox -->

                            <button class="btn btn-primary btn-block mb-4" name="editer">
                                Enregister
                            </button>

                            <?php if(isset($_POST['editer'])){ 
                                                              $firstname=$_POST['firstname'];
                                $lastname=$_POST['lastname']; $username=$_POST['username']; $email=$_POST['email'];
                                $motDePasse=$_POST['passe']; $role_name=$_POST['role']; $id=$id_champ;
                                $sql="UPDATE `Register` SET `firstname`='$firstname',`lastname`='$lastname',`username`='$username',`email`='$email',`role_name`= '$role_name' WHERE `id`='$id'";
                                ; // $edit_update=$bdd->query("UPDATE Register SET firstname= $firstname ,lastname=
                            // $lastname ,username= $username ,email= $email ,role_name= $role_name WHERE id= $id");
                           $result= $bdd->query($sql);
                            if($result){
                                //  var_dump($result);

                                header('Location:admin.php');
                            }else{
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
</section>
<?php include ("footer.php")?>

<body>

</html>