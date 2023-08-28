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
    crossorigin="anonymous"></script> -->
    <link href="style.css" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../bootstrap/dashboard.css" rel="stylesheet">

  <title>Creer Formation</title>
</head>
<body>
<?php 
include("dashboard_m.php");?>
<div class="container-fluid">
      <?php include("dashboard_admin_nav_vertical.php")?>

<section class="">
  <div class="container h-100">
    
    <form action="create_formation.php" method="post" class="row d-flex justify-content-center align-items-center h-50">
      <div class="col-xl-7">

        <h1 class="text-dark mb-4 text-center">Creer une formation</h1>

        <div class="card" style="border-radius: 15px;">
          <div class="card-body">

            <div class="row align-items-center pt-4 pb-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Titre</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input type="text" class="form-control form-control-lg" name="titre" />

              </div>
            </div> 
            <hr class="mx-n3">
            <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Description</h6>

              </div>
              <div class="col-md-9 pe-5">

                <textarea class="form-control" rows="3" placeholder="Description de la formation" name="description"></textarea>

              </div>
            </div>

            <hr class="mx-n3">

             <div class="row align-items-center py-3">
              <div class="col-md-3 ps-5">

                <h6 class="mb-0">Image</h6>

              </div>
              <div class="col-md-9 pe-5">

                <input class="form-control form-control-lg" id="formFileLg" type="file" name="photo" />
                <div class="small text-muted mt-2">Upload your image
                  </div>

              </div>
            </div> 

            <hr class="mx-n3">

            <div class="px-5 py-4">
              <button type="submit" class="btn btn-primary btn-lg">Send</button>
            </div>

          </div>
        </div>

      </div>
</form>
  </div>
</section>
</div>
<?php
include("footer.php");
?>
</body>
</html>