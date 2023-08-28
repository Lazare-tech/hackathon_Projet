<?php
try{
  $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  
}
catch(Exception $e){
  die("Error " . $e->getMessage());
}

$Nom = $_POST["Nom"];
$description = $_POST["description"];
$Email = $_POST["Email"];
$photo= $_POST['photo'];
$Mot_de_passe = $_POST["Mot_de_passe"];
// $Contact = $_POST["Contact"];
$passe=password_hash($Mot_de_passe,PASSWORD_DEFAULT);

echo "Nom: $Nom <br>";
echo "desc: $description <br>";
echo "Email: $Email <br>";
// echo "Mot de passe: $Mot_de_passe <br>";
// echo "Contact: $Contact <br>";


$son = $bdd->query("SELECT roles FROM Roles WHERE roles = 'entreprise' ");
$son_son= $son->fetch();
echo $son_son['roles'];
$req = $bdd->prepare('INSERT INTO entreprise (nom_entreprise,description_entreprise,photo,
email, Mot_de_passe,role_name) VALUES(:Nom, :description_entreprise, :photo, :Email, :passe, :role_utilisateur)');
$req->execute([
'Nom' => $Nom,
'description_entreprise' => $description,
'photo' => $photo,
'Email'  => $Email,
'passe' => $passe,
'role_utilisateur' => $son_son['roles'],
]);




header('Location: login_form.php');



?>


