<?php
include 'functions.php';
include 'contact.html';
try 
{
    $pdo=new PDO('mysql:dbname=bdd_git; host=localhost','root', '');
}
catch(Exception $e)
{
     echo 'erreur de connexion';
}

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$commentaire=$_POST['commentaire'];

ajouterCommentaire($pdo, $nom, $prenom, $email, $commentaire);

?>

