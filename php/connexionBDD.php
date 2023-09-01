<?php

include_once("fonctions.php");


try
{
    $db = new PDO("mysql:host=localhost; dbname=wifidatabase; charset=utf8", 'root', 'root', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}
catch(Exception $e)
{
    die("Error : ". $e->getMessage());
}