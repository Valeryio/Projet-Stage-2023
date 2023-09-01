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
            <img src="images/profile.svg" alt="">
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
            <a href="#"><img src="images/Group 1.svg" title="paramètres" alt="paramètres buttons"></a>
        </div>

        <div class="deconnexion">
            <a href="index.php"><img src="images/power off.svg" title="déconnexion" alt="deconnexion button"></a>
        </div>


    </body>

</html> 