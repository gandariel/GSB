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
        /*
        $message = '<p>Une erreur s\'est produite 
        pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
        pour revenir à la page précédente
        <br /><br />Cliquez <a href="./index.php">ici</a> 
        pour revenir à la page d accueil</p>';
         * 
         */
    }
    $requete->CloseCursor();
    
    return $message;
     
     
}
?>
