<?php
include 'function.php';
include 'connexion.html';
try 
{
    $pdo=new PDO('mysql:dbname=BDD_git; host=localhost','root', '');
}
catch(Exception $e)
{
     echo 'erreur de connexion';
}

$identifiant=$_POST['identifiant'];
$mdp=$_POST['motDePasse'];

verifierLogs($pdo, $identifiant, $mdp);
?>
