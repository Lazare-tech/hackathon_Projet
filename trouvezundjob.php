<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylee.css">
  <link rel="stylesheet" href="style2.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />



  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link href="http://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
    crossorigin="anonymous"
  />  -->


  <title>Formation D-CLIC</title>
</head>

<header>

<body>
<div >
<?php include("menu/menu.php")?>
</div>

  <div class="na2">
    <h5>PROGRAMME</h5>
    <div class="logo-box">
      <h3 class="une">D</h3>
      <h3 class="deux">-</h3>
      <h3 class="trois">C</h3>
      <h3 class="quatre">L</h3>
      <h3 class="cinq">I</h3>
      <h3 class="six">C</h3>

    </div>

    <h2>Formez-vous au numérique</h2>
  </div>

  <div class="na3">
    <div class="ja">
      <a class="job1" href="trouvezundjob.php">Touvez un job</a>
    </div>
    <div class="aj">
      <a class="job2" href="trouveruncanditat.php" style="margin-left: 0;">Trouver un candidat </a>
    </div>
  </div>

  <div class="na4">

    <input type="text" placeholder="eg.adam Scott" />

    <select class="form-select na4-1" aria-label="Default select example">
      <option value="1">Debutant</option>
      <option value="2">Moyen</option>
      <option value="3">Assez bon</option>
      <option value="4">Professionelle</option>
    </select>
    <input type="text" placeholder="Localisation" />
    <button class="sea">Search</button>

  </div>
</header><br><br>






<section>

  <h1 style="color: rgb(46, 46, 247);">Listes des jobs</h1><br>

  <div class="list">

    <div class="t1">
      <br>
      <h6 style="color: rgb(255, 87, 87);">Categorie de job</h6>
      <select name="" id="">
        <option value="">DEVELOPPEMENT WEB</option>
        <option value="">CLOUD COMPUTING</option>
        <option value="">MARKETING DIGITAL</option>
      </select> <br><br>

      <h6 style="color: rgb(255, 87, 87);">Type de job</h6>

      <div>
        <input type="radio" name="text" id="">
        <label for="">Developpeur web</label>
      </div><br>

      <div>
        <input type="radio" name="text" id="">
        <label for="">Marketeur</label>
      </div><br>

      <div>
        <input type="radio" name="text" id="">
        <label for="">Cloud</label>
      </div>
    </div>


    <div class="t2">

      <div class="dd da">
        <div>
          <img src="images/AUF.png" alt="">
          Developpeur
        </div>
        <div>
          <input type="text" placeholder="Temps">
        </div>
      </div><br><br>



      <div class="dd">
        <div>
          <img src="images/AUF.png" alt="">
          Marketeur
        </div>
        <div>
          <input type="text" placeholder="Temps">
        </div>
      </div><br><br>
      <div class="dd">
        <div>
          <img src="images/AUF.png" alt="">
          Cloudeur
        </div>
        <div>
          <input type="text" placeholder="Temps">
        </div>
      </div>
    </div>



  </div>
  <br><br>
</section>





<script src="index2.js"></script>
<?php include("footer/footer.php")?>

</body>

</html>