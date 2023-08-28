<?php 
//connexion a la base de donnee,nom de ma base de donnnee test
try{
    $bdd= new PDO('mysql:host=localhost;dbname=test;','root','',
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    
}
catch(Exception $e){
    die("Error " . $e->getMessage());
}
//recuperation des donnees du formulaire inscription
$firstname = $_POST['firstname'];
$lastname =  $_POST['lastname'];
// $username =  $_POST['username'];
$email = $_POST['email'];
$motDePasse = $_POST['motDePasse'];
$contact = $_POST['Contact'];
$passe=password_hash($motDePasse,PASSWORD_DEFAULT);
//afichage des donnees du formulaire
echo "Firstname : $firstname<br> Lastname: $lastname <br> Username $username <br> Email: $email <br> 
    Password: $motDePasse <br> Password hash $passe <br> numeri : $contact".'<br>';
// requete select pour selectionner le role editeur dans la base de donnee ou ya les roles
$role=$bdd->query("SELECT role FROM Role WHERE role ='editeur' ");
//parcours de ma variable $role pour recuperer le role
$role_name= $role->fetch();
//afichage du role,pas necessaire
echo $role_name['role'].'<br>';
//requete prepare pour inserer lutilisateur qui sest enregistrer dans ma base de donee en lui donnant le role
//comme role editeur quon avait selectionner ci-dessus
$req= $bdd->prepare("INSERT INTO Register (firstname,lastname, email,motDePasse,role_name, contact)

                         VALUES   (:firstname,  :lastname,  :email, :motDePasse, :role_name, :contact)");
//definir les nom des champs que je veux enregister,les nnom entre quote doivent pareille que ceux
//qui ont deux points dans values ci-dessus
//les dolar et nom sont les nom et prenom que jai recuperer avec post

$req->execute([
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' =>  $email,
    'motDePasse' => $passe,
    'role_name' => $role_name['role'],
    'contact' => $contact
]);
if($req){
    echo "dd";
}
//lorsque jenregistre je suis rediriger vers la page login 
header('Location:../frontend/login.php');

?>