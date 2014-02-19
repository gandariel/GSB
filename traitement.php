<?php
include 'functions.php';
include 'connexion.html';
try 
{
    $pdo=new PDO('mysql:dbname=BDD_git; host=localhost','root', '');
}
catch(Exception $e)
{
     echo 'erreur de connexion';
}

$identifiant=$_POST['user'];
$mdp=$_POST['password'];

verifierLogs($pdo, $identifiant, $mdp);
echo 'lol';
?>
