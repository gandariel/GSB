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
function ajouterCommentaire($pdo, $nom, $prenom, $email, $commentaire)
{
    $requete=$pdo->prepare('INSERT INTO contact VALUES(:nom, :prenom, :email, :commentaire');
    $requete->bindValue(":nom", $nom);
    $requete->bindValue(":prenom", $prenom);
    $requete->bindValue(":email", $email);
    $requete->bindValue(":commentaire", $commentaire);
    $requete->execute();
    $requete->CloseCursor();
    echo 'lol';
}
?>
