
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programme D-CLIC</title>
    <link rel="stylesheet" href="style_log.css">
    <script defer src="/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="style.css">

  </head>
<body>
<div class="bg-info">

  <?php include("./menu/bc.php")?>
</div>
    <h3 class="mb-5 p-5 text-center">Connexion Compte Utilisateur</h3>
    <div class="container">
    <form action="login.php"  method="post" class="dim" style="padding-left:300px;padding-right:300px">
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form1Example1" class="form-control" name="Adress"/>
          <label class="form-label" for="form1Example1">Adress email</label>
        </div>
      
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="form1Example2" class="form-control" name="Mot_de_passe"/>
          <label class="form-label" for="form1Example2">Mot de passe</label>
        </div>
      
        <!-- 2 column grid layout for inline styling -->
        <div class="row mb-4">
          <div class="col d-flex justify-content-center">
            <!-- Checkbox -->
            <div class="col">
                <!-- mot de passe -->
                <a href="#!">Mot de passe oublié?</a>
              </div>
          </div>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block" name="submit" >Se connecte</button>
      </form>
</div>
</body>
</html>