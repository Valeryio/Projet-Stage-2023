<?php


// include('connexionBDD.php');



/**
 * check - Une fonction pour vérifier toutes les données qui sont envoyées
 * 
 * @param mixed $value
 *      La valeur que la fonction doit vérifier 
 * 
 * @return mixed 
 *      La valeur totalement sécurisée ! 
 */

function check($value)
{
    if (isset($value))
    {
        return strip_tags(htmlspecialchars($value));
    }
    else
    {
        echo "La variable est vide!";
    }
}


/**
 * datetime_to_date - Extrait uniquement la partie date issue d'un objet datetime envoyé par MySQl
 * 
 * @param mixed $datetimeObject
 * @return mixed $date extraite
 */

function datetimeToDate($datetimeObject)
{
    // Extraction du seul module de la date
    $date = date_format(new DateTime($datetimeObject), "Y-m-d");

    return $date;
}



/**
 * Une fonction qui permet de trouver le statut d'un utilateur pour une offre précise
 * 
 * @param int $id_utilisateurs
 * @param int $id_offres
 * 
 * Description : Cette fonction prend en paramètre l'ID d'un client, ainsi que l'ID d'une 
 * offre bien précise.
 * Avec ces deux éléments, il effectue une requête précise, pour déterminer le statut
 * du dernier abonnement de cette offres. Et puisque nous avons effectué des contrôles pour
 * ne permettre qu'un seul abonnement à la, fois, et bien, il n'y aura dans tous les cas
 * qu'une seule offre qui sera valide.
 * 
 * Pour effectuer ce travail, nous avons eu besoin à un moment d'une requête imbriquée, afin
 * de déterminer la date d'abonnement la plus récente, pour avoir la valeur unique souhaitée.
 * 
 * @return string $StatutResult
 * 
 */

function updateStatut($id_utilisateurs, $id_offres)
{

    include('connexionBDD.php');

    // - Ici, il a fallu utiliser une requête imbriquée pour déterminer le dernier abonnement du client en cours
    $statutQuery = $db->prepare('SELECT statut 
                                FROM historique WHERE id_utilisateurs=:id_utilisateurs
                                AND id_offre=:id_offre  AND date_debut_abonnement=(SELECT MAX(date_debut_abonnement)
                                                                                    FROM historique
                                                                                    WHERE id_offre=:id_offre_1)');


    $statutQuery->bindParam(':id_utilisateurs', $id_utilisateurs, PDO::PARAM_INT);
    $statutQuery->bindParam(':id_offre', $id_offres, PDO::PARAM_INT);
    $statutQuery->bindParam(':id_offre_1', $id_offres, PDO::PARAM_INT);

    $statutQuery->execute();

        
    $statutResult = $statutQuery->fetch();

    // - Vérification pour savoir si la valeur est nulle ou pas, car cela peut-être le cas
    // si cet abonnement n'est pas celui auquel l'utilisateur a souscrit actuellement

    if ($statutResult == false)
    {
        $statutResult['statut'] = "Non actif";
    }
    else
    {
        // - Si ce dernier a déjà souscrit une fois à l'abonnement, mais que ce dernier est terminé
        if($statutResult['statut'] == "Terminé")
        {
            $statutResult['statut'] = "Non actif";
        }                     
    }
    
    return $statutResult;
}

