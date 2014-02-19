<?php

function verifierLogs($pdo, $identifiant, $mdp)
{
    $requete=$pdo->prepare('SELECT motDePasse FROM logs WHERE identifiant = :identifiant');
    $requete->bindValue(":identifiant", $identifiant);
    $requete->execute();
    
    $data=$requete->fetch();
    
    if($data['motDePasse']== $mdp)
    {
        header('Location: authentification_reussie.html');
    }
    
    else
    {
        header('Location: authentification_Failed.html');
    }
    $requete->CloseCursor();
    

     
}
?>
