<?php 

try{
    $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
} 
$titre = $_POST['titre'];
$lieu =  $_POST['location'];
$temps =  $_POST['temps'];
$dateDebut = $_POST['dateDebut'];
$dateLimit = $_POST['dateLimit'];
$id_entreprise= $_POST['id_entreprise'];
$description_job = $_POST['description'];
$photo =$_POST['photo'];
echo 'titre'.''.$titre.'<br> lieu '.''.$lieu.'<br> temps'.''.$temps.'<br> datelimit'.''.$dateLimit.'<br> description'.''.$description_job.'<br> id_entreprise'.$id_entreprise;
$req= $bdd->prepare("INSERT INTO job (titre,lieu, temps ,dateDebut, dateLimit,description_job,photo,id_entreprise)
                         VALUES   (:titre,  :lieu , :temps, :dateDebut, :dateLimit, :description_job,:photo,:id_entreprise)");

$req->execute([
    'titre' => $titre,
    'lieu' => $lieu,
    'temps' => $temps,
    'dateDebut' => $dateDebut,
    'dateLimit' =>  $dateLimit,
    'description_job' => $description_job,
    'photo' => $photo,
    'id_entreprise' => $id_entreprise,
]);
if($req){
    header('Location:view_job.php');

}
?>