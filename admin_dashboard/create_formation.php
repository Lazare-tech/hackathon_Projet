<?php 

try{
    $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
} 
$titre = $_POST['titre'];
$description_formation = $_POST['description'];
$photo =$_POST['photo'];
// echo $titre.'<br>'.''.$lieu.'<br>'.''.$temps.'<br>'.''.$dateLimit.'<br>'.''.$description_job;
$req= $bdd->prepare("INSERT INTO Formations (titre,description_formation,photo)
                         VALUES   (:titre, :description_formation,:photo)");

$req->execute([
    'titre' => $titre,
  
    'description_formation' => $description_formation,
    'photo' => $photo,
]);
if($req){
    header('Location:view_formation.php');

}
?>