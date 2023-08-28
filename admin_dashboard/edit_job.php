<?php
include ("../config/config.php");

try{
  $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}
catch(Exception $e){
  die("Error " . $e->getMessage());
}
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
    <title>Edition Job</title>
    <link href="../style.css" rel="stylesheet">
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

    <?php $id_champ = $_SESSION['id'];
if (isset($_GET['id'])) {
    $id_champ = $_GET['id'];

    $edit = $bdd->prepare("SELECT * FROM job WHERE id= :id");
    $edit->execute([
        'id' => $id_champ,
    ]);
    $resultat = $edit->fetch();
    //..........................................

    //..........................................
}
?>
    <?php include "dashboard_m.php"?>



    <div class="container-fluid">
        <?php include "dashboard_admin_nav_vertical.php"?>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
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
            <h3>Editer un Job</h3>
            <div class="container   text-center text-lg-start my-2 ">
                <div class="row gx-lg-5 align-items-center ">

                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative justify-content-center">
                       
                        <div class="card bg-glass">
                            <div class="card-body px-4 py-4 px-md-5">
                                <form action="" method="post">
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <!-- <div class="row"> -->
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="titre"
                                                value=" <?php echo $resultat['titre'] ?>" />
                                            <label class="form-label" for="form3Example1">Titre</label>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="lieu"
                                                value=" <?php echo $resultat['lieu'] ?>" />
                                            <label class="form-label" for="form3Example1">Lieu</label>
                                        </div>
                                    </div>
                                    <div class="mb-42">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="temps"
                                                value=" <?php echo $resultat['temps'] ?>" />
                                            <label class="form-label" for="form3Example1">Temps</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="dateDebut"
                                                value=" <?php echo $resultat['dateDebut'] ?>" />
                                            <label class="form-label" for="form3Example1">Date debut</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <div class="form-outline">
                                            <input type="text" id="form3Example1" class="form-control" name="dateLimit"
                                                value=" <?php echo $resultat['dateLimit'] ?>" />
                                            <label class="form-label" for="form3Example1">Date fin</label>
                                        </div>
                                    </div>
                                    <div class="mb-2">
                                        <textarea class="form-control" rows="3" name="description">
                            <?php echo $resultat['description_job'] ?>

                            </textarea>

                                        <label class="form-label" for="form3Example1">Description</label>
                                    </div>
                            </div>
                            <div class="mb-2">
                                <div class="form-outline">
                                    <input type="file" id="form3Example1" class="form-control" name="photo"
                                        value=" <?php echo $resultat['photo'] ?>" />
                                    <label class="form-label" for="form3Example1">Image job</label>
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
                                            $lieu=$_POST['lieu'];
                                            $temps=$_POST['temps'];

                                            $dateDebut= $_POST['dateDebut'];
                                            // $photo= $_POST['photo'];
                                            $dateLimit= $_POST['dateLimit'];
                                            $description_job=$_POST['description'];
                                            $photo = $_POST['photo'];

                                            $id=$id_champ;
                                            $sql="UPDATE `job` SET `titre`='$titre',`lieu`='$lieu',`temps`='$temps', `dateDebut`='$dateDebut' ,`dateLimit`='$dateLimit',`description_job`='$description_job', `photo`='$photo' WHERE `id`='$id' ";
                                              // $edit_update=$bdd->query("UPDATE Register SET firstname= $firstname ,lastname=
                                             // $lastname ,username= $username ,email= $email ,role_name= $role_name WHERE id= $id");
                                             $result= $bdd->query($sql);
                                            if($result)
                                            {
                                               header('Location:view_job.php');
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
            </main>
    </div>
</body>

</html>