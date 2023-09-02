<?php

include("connexionBDD.php");

// - Gestion de la connexion de l'utilisateur

if(isset($_POST['mail']) && isset($_POST['password']))
{

    $mail = check($_POST['mail']);
    $password = check($_POST['password']);

    // - Récupération des données nécessaires de la table utilisateur

    $query = $db->prepare("SELECT * FROM users WHERE mail=:mail");
    $query->execute(
        [
            'mail' => $mail
        ]);

    $userData = $query->fetch();

    // echo "Pour commencer, voici ce que je reçois de la page : " . $mail . " Et de la base de donnée : " . $userData['mail'];
    // echo "Ensuite, voici ce que je reçois d'autre de la page : " .$password . " Et de la base de donnée " . $userData['password'];

    
    // - Vérification de la véracité des différentes informations envoyées !
    if(($userData['mail'] == $mail) && password_verify($password, $userData['password']))
    {
        echo "Les informations envoyées sont bonnes !";

        session_start();

        $_SESSION['nom'] = $userData['nom'];
        $_SESSION['prenom'] = $userData['prenom'];
        $_SESSION['mail'] = $userData['mail'];
        $_SESSION['date_inscription'] = $userData['date_inscription'];

        header('Location: ../accueil.php');

    }
    else
    {
        echo "Non les informations ne sont pas bonnes !";
    }

    
}