<?php

    session_start();
    
    if(!isset($_SESSION['nom']))
    {
        header('Location: unauthorised.php');
        die;
    }
    else
    {
        include("php/connexionBDD.php");
    }

?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/accueil.css">
        <title> Dashboard </title>
    </head>

    <body>
        
        <h2>Nos offres</h2>

        <div class="logo">
            <img src="images/logo.svg" alt="Logo de la marque">
        </div>

        <div class="tableau">

            <!--Ligne 1-->

            <div class="ligne">

                <div class="cellule">Quantité</div>
                <div class="cellule">Durée</div>
                <div class="cellule">Prix</div>
                <div class="cellule">Statut</div>
                <div class="cellule">Action</div>

            </div>

            <div class="separateur"></div>


            <!--Ligne 2-->

            <div class="ligne">

                <div class="cellule">1 Go</div>
                <div class="cellule">1 semaine</div>
                <div class="cellule">750 Fcfa</div>
                <div class="cellule">En cours...</div>
                <div class="cellule">
                    <button> <a href="#" >S'abonner</a> </button>
                </div>

            </div>

            <div class="separateur"></div>

            
            <!--Ligne 3-->
            
            <div class="ligne">

                <div class="cellule">2 Go</div>
                <div class="cellule">2 semaines</div>
                <div class="cellule">1500 Fcfa</div>
                <div class="cellule">Non actif</div>
                <div class="cellule">
                    <button> <a href="#" >S'abonner</a> </button>
                </div>

            </div>

            <div class="separateur"></div>


            <!--Ligne 4-->
            
            <div class="ligne">

                <div class="cellule">3 Go</div>
                <div class="cellule">3 semaine</div>
                <div class="cellule">2250 Fcfa</div>
                <div class="cellule">Non actif</div>
                <div class="cellule">
                    <button> <a href="#" >S'abonner</a> </button>
                </div>

            </div>

            <div class="separateur"></div>

            <!--Ligne 5-->
            
            <div class="ligne">

                <div class="cellule">4 Go</div>
                <div class="cellule">1 mois</div>
                <div class="cellule">3000 Fcfa</div>
                <div class="cellule">Non actif</div>
                <div class="cellule">
                    <button> <a href="#" >S'abonner</a> </button>
                </div>

            </div>

            <div class="separateur"></div>


        </div>


        <div class="profil">
            <img src="images/profil.svg" alt="photo de profil">
            
            <div><?=$_SESSION['nom'] . " " . $_SESSION['prenom']?></div>
            <div><strong>Date inscription : </strong><?=$_SESSION['date_inscription']?> </div>
            <div><strong>Date actuelle : </strong><?=date("Y-m-d")?> </div>
        </div>


        <h2 class="forfait" >Forfait actuel</h2>

        <div class="table_border">
            <table class="abonnement_actif" >

                <thead>
                    <tr>
                        <td> Date de début</td>
                        <td> Date de fin</td>
                        <td> Abonnement actif</td>
                        <td> Quantité utilisée</td>
                        <td class="right_cell" > Quantité restante</td>
                    </tr>
                </thead>
    
                <tbody>
                    <tr>
                        <td>01/07/23</td>
                        <td  class="end_date">01/08/23</td>
                        <td>4 Go</td>
                        <td>3.8 Go</td>
                        <td class="right_cell" >0.2 Go</td>
                    </tr>
                </tbody>
    
                
            </table>
        </div>
        


        <div class="parameters">
           <a href="" class="historic_button" > <button><img src="images/Group 1.svg" title="paramètres" alt="paramètres buttons"></button></a>
        </div>

        <div class="deconnexion">
           <a href="php/deconnexion.php"> <button><img src="images/power off.svg" title="déconnexion" alt="deconnexion button"></button></a> 
        </div>


        <!--Historic Div-->

        <div class="dark_background display_state_non ">


            <?php
            
            /**
             * Mise en place du système d'affichage de l'historique
             * 
             * Description: 
             * Le code ci-dessous, est utilsé pour obtenir les informations de la table
             * historique, afin de pouvoir les afficher dans le modal des historiques de
             * l'utilisateur.
             * 
             * Une inclusion est faite au début : En effet, cette dernière permet de mettre à
             * jour la table historique avant que la moindre action ne soit effectuée
             * 
            */

            include('php/MajStatut.php');


            $historique_query = $db->prepare("SELECT historique.date_debut_abonnement AS date_debut, historique.date_fin_abonnement AS date_fin, offres.quantite AS Type, historique.statut AS statut
            FROM historique
            INNER JOIN utilisateurs ON historique.id_utilisateurs=utilisateurs.id
            INNER JOIN offres ON historique.id_offre=offres.id
            WHERE historique.id_utilisateurs = :id");

            $historique_query->execute(
                ['id' => $_SESSION['id']]
            );

            // - Stockage de toutes les données relatives au abonnement de l'utilisateur dans un tableau de tableaux associatifs
            $historique = $historique_query->fetchAll();
            
            ?>

            <div class="historic">
                <table>
                    <thead>
                        <tr>
                            <td>Date de début</td>
                            <td>Date de fin</td>
                            <td>Type d'abonnement</td>
                            <td>Statut</td>
                        </tr>
                    </thead>

                    <tbody>

                            <?php
                                // - Affichage de toutes les transactions effectuées !

                                foreach($historique as $abonnement):
                            ?>

                        <tr>
                            <td>
                                <?php

                                    // - Nous recevons la date en format de datetime, nous devons donc la convertir en date simple
                                    echo datetimeToDate($abonnement['date_debut']);
                                
                                ?>
                            </td>

                            <td>
                                <?php

                                    // - Nous recevons la date en format de datetime, nous devons donc la convertir en date simple
                                    echo datetimeToDate($abonnement['date_fin']);
                                
                                ?>
                            </td>

                            <td><?=$abonnement['Type']?></td>
                            <td class="end_date" > <?=$abonnement['statut']?> </td>
                        </tr>

                            <?php

                                endforeach;

                            ?>

                    </tbody>

                </table>
            </div>


            
        </div>

        <script src="js/monModalJs.js" ></script>

    </body>

</html> 