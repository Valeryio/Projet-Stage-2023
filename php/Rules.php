<?php

include('connexionBDD.php');

session_start();

// -  Un certain nombre de contrôles doivent être faits avant que la base de donnée ne recoivent les données !

// - La première d'entre elles, est la suivante : 
/**
 * @test - L'utilsateur ne peut pas faire deux abonnements au cours d'une même période
 * 
 * Description: Nos règles de mise en place de la plate-forme stipulent que notre utilisateur ne peut pas acheter deux
 * abonnement directement, dans une même période de temps.
 */

/**
 * Ici, la vérification est lancée par une requête. Cette requête ne se base pas sur la dernière date d'abonnement, car
 * il se peut que : 
 * 
 * - La personne n'aie jamais souscrit à un abonnement
 * 
 * Ainsi, la vérification cherche juste à savoir s'il y a déjà, un statut d'abonnement en cours pour un utilisateur précis
 */


$verificationQuery = $db->prepare("SELECT statut FROM historique WHERE id_utilisateurs=:id_utilisateurs AND statut = 'En cours'");

$verificationQuery->execute(['id_utilisateurs' => $_SESSION['id']]);
$verificationResult = $verificationQuery->fetch();

echo $verificationResult['statut'];


if ($verificationResult['statut'] == "En cours")
{
    
}