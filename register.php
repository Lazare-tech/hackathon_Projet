<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}
catch(Exception $e){
  die("Error " . $e->getMessage());
}

$Nom = $_POST["Nom"];
$Prenom = $_POST["Prenom"];
$Email = $_POST["Email"];
$nom_utilisateur= $_POST['nom_utilisateur'];
$Mot_de_passe = $_POST["Mot_de_passe"];
$Contact = $_POST["Contact"];
$formation = $_POST['formation'];
$promotion = $_POST['promotion'];
$ville = $_POST['ville'];
$photo = $_POST['photo'];
// echo "Nom: $Nom <br>";
// echo "Prenom: $Prenom <br>";
// echo "Email: $Email <br>";
// echo "Mot de passe: $Mot_de_passe <br>";
// echo "Contact: $Contact <br>";


$son = $bdd->query("SELECT roles FROM Roles WHERE roles = 'aprenant' ");
$son_son= $son->fetch();
echo $son_son['roles'];
// $req = $bdd->prepare('INSERT INTO register(Nom,Prenom,nom_utilisateur,
// Email, Mot_de_passe, Contact, role_utilisateur) VALUES(:Nom, :Prenom, :nom_utilisateur, :Email, :passe, :Contact, :role_utilisateur)');
// $req->execute([
// 'Nom' => $Nom,
// 'Prenom' => $Prenom,
// 'nom_utilisateur' => $nom_utilisateur,
// 'Email'  => $Email,
// 'passe' => $passe,
// 'Contact' => $Contact,
// 'role_utilisateur' => $son_son['roles'],
// ]);




// header('Location: login_form.php');

if(isset($_POST['submit'])) {

  if(empty($_POST['Nom'])
      OR empty($_POST['Prenom'])
      OR empty($_POST['nom_utilisateur'])
       OR empty($_POST['Email']) 
       OR empty($_POST['Contact']) 
       OR empty($_POST['Mot_de_passe'])
      OR empty($_POST['formation'])
      OR empty($_POST['promotion'])
      OR empty($_POST['ville'])
      OR empty($_POST['photo'])) {
         
    echo "<script>alert('some inputs are empty');</script>";
  } else {

    // $username = $_POST['username'];
    // $email = $_POST['email'];
    // $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $passe=password_hash($_POST['Mot_de_passe'],PASSWORD_DEFAULT);

    $insert = $bdd->prepare("INSERT INTO register(Nom,Prenom,nom_utilisateur,
     Email, Mot_de_passe, Contact, role_utilisateur,formation,ville,promotion,photo) VALUES(:Nom, :Prenom, :nom_utilisateur, :Email, :passe, :Contact, :role_utilisateur, :formation, :ville, :promotion, :photo)");
    

    $insert->execute([
      // ":username" => $username,
      // ":email" => $email,
      // ":mypassword" => $password,
      
  ':Nom' => $Nom,
':Prenom' => $Prenom,
':nom_utilisateur' => $nom_utilisateur,
':Email'  => $Email,
':passe' => $passe,
':Contact' => $Contact,
':role_utilisateur' => $son_son['roles'],
':formation' => $formation,
':ville' => $ville,
':promotion' => $promotion,
':photo' => $photo,
    
    ]);
    
    header("location:login_form.php");


  }
}

?>


