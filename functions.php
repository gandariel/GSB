<?php
function verifierLogs($pdo, $identifiant, $mdp)
{
    $requete=$pdo->prepare('SELECT motDePasse FROM logs WHERE identifiant = :identifiant');
    $requete->bindValue(":identifiant", $identifiant);
    $requete->execute();
    
    $data=$requete-fetch();
    
    if($data['motDePasse']== $mdp)
    {
        $message = '<p>Bienvenue '.$data['membre_pseudo'].', 
            vous êtes maintenant connecté!</p>
            <p>Cliquez <a href="index.php">ici</a> 
            pour revenir à la page d accueil</p>'; 
    }
    else
    {
        $message = '<p>Une erreur s\'est produite 
        pendant votre identification.<br /> Le mot de passe ou le pseudo 
            entré n\'est pas correcte.</p><p>Cliquez <a href="./connexion.php">ici</a> 
        pour revenir à la page précédente
        <br /><br />Cliquez <a href="./index.php">ici</a> 
        pour revenir à la page d accueil</p>';
    }
    $requete->CloseCursor();
    echo $message;
}
?>
