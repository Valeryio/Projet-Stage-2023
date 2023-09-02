<?php

session_start();


/**
 * - Destruction de la variable de session en deux temps :
 * 
 * - unset : utilisé pour détruire les variables de la superglobale
 * 
 * - destroy : utilisé pour détruire la superglobale elle-même
 * 
 *  */

session_unset();
session_destroy();


header('location: ../index.php');