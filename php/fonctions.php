<?php


/**
 * check - Une fonction pour vérifier toutes les données qui sont envoyées
 * 
 * @param mixed $value
 *      La valeur que la fonction doit vérifier 
 * 
 * @return  mixed 
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


