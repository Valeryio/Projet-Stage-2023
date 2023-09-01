<?php

/**
 * Ceci est le fichier de traitement de toutes les informations reçues de l'utilisateur
 */

include("connexionBDD.php");


if (isset($_POST['inscription']))
{
    echo "Okay !";

    $nom = check($_POST['nom']);
    $prenom = check($_POST['prenom']);
    $mail = check($_POST['mail']);
    $password = password_hash( check($_POST['password']), PASSWORD_BCRYPT );


    echo "Le mot de passe ".$password;

    // Insertion des données dans la base
    $queryInsertion = $db->prepare("INSERT INTO users(nom, prenom, mail, password, date_inscription) VALUES (:nom, :prenom, :mail, :password, :date_inscription) ");

    $queryInsertion->execute(
        [
            'nom' => $nom,
            'prenom' => $prenom,
            'mail' => $mail,
            'password' => $password,
            'date_inscription' => date("Y-m-d H:i:s")
        ]);

    
        header('location: ../verification.php');

}
