<?php 
include("config.php");
$nom_entreprise= $_POST['Nom'];
$description_entreprise= $_POST['description'];
$photo= $_POST['photo'];
//affichage des donnnees
echo $nom_entreprise.'<br>'.$description_entreprise.'<br>';
//requete pour insertion de lentreprise
$req=$bdd->prepare("INSERT INTO entreprise(nom_entreprise, description_entreprise, photo)
VALUES (:nom_entreprise, :description_entreprise, :photo) ");
$req->execute([
    'nom_entreprise' => $nom_entreprise,
    'description_entreprise' => $description_entreprise,
    'photo' => $photo
]);

header('Location:view_entreprise.php');

?>