<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programe-D-CLIC</title>
    <link rel="stylesheet" href="style.css">
    <script defer src="/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="dashboard.css" rel="stylesheet">
  </head>
<body>
    <?php include("dashboard_m.php")?>

    <div class="container-fluid">
      <?php include("dashboard_admin_nav_vertical.php")?>

    
  <div class="justify-content-center">
    <div class="row gx-lg-5 align-items-center p-5">
      <h3 class="text-center text-primary ">Creation De Compte Entreprise</h3>

      <div class="col-lg-3"></div>
      <div class="col-lg-6 ">
        
        <div class="card bg-glass justify-content-center  border-0 ">
          <div class="card-body px-md-5  border-0">
            <form action="creation_entreprise.php" method="post">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" class="form-control" name="Nom" />
                    <label class="form-label" for="form3Example1">Nom</label>
                  </div>
                
                  <div class="form-outline">
                  <textarea class="form-control" rows="3" placeholder="Description de l'entreprise " name="description"></textarea>

                    <label class="form-label" for="form3Example2">Description</label>
                  </div>
               


              <!-- Email input -->
              <div class="form-outline mb-2">
                <input type="file" id="form3Example3" class="form-control" name="photo" />
                <label class="form-label" for="form3Example3">Image</label>
              </div>
              <!-- Checkbox -->


              <!-- Submit button -->
              <button type="submit" class="btn btn-primary btn-block mb-2">
                enregistrer
              </button>
            </form>
            <a href="#" class="btn btn-outline-info">Retour</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>