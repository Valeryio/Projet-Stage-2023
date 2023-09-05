<?php

/**
 * Ce fichier permet de mettre à jour le statut de L'abonnement dans la base de donnée
 *
 * Pour cela, il est inclu directement dans le fichier de l'accueil, juste avant que la requête pour
 * l'affichage de l'historique ne soit effectuée. 
 */

// - Récupération du plus grand id de l'historique
$id_query = $db->prepare('SELECT MAX(id) AS id FROM historique');
$id_query->execute();

$max_id = $id_query->fetch();


// - Mise en place d'une boucle pour mettre à jour chacun des éléments de la table historique
for ($i = 1; $i <= $max_id['id']; $i++)
{

     // - Utilisation de la fonction SQL DATEDIFF pour déterminer le nombre de jours entre la date actuelle et la fin de l'abonnement
    $period = $db->prepare("SELECT DATEDIFF(NOW(), date_fin_abonnement) AS TMP FROM historique WHERE id=:id");

    $period->execute(
        ['id' => $i]);

    // - Récupération du nombre de jours : Ce dernier est négatif si la date n'est pas encore atteinte et positif dans le cas contraire
    $dateFinResult = $period->fetch();

    // - 
    if ($dateFinResult['TMP'] < 0)
    {
        $MaJquery = $db->prepare("UPDATE historique SET statut='En cours'  WHERE id = :id");
        $MaJquery->execute(
            ['id' => $i]);
    }
    else
    {
        $MaJquery = $db->prepare("UPDATE historique SET statut='Terminé'  WHERE id = :id");
        $MaJquery->execute(
            ['id' => $i]);
    }

}