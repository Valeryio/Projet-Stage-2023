<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/inscription.css">
    <link rel="stylesheet" href="css/style.css
    ">
    <title>Inscription Portail Captif FUN HIGH TECH</title>
</head>
<body>

    <div class="background_band"></div>

    <div class="icone" > <a href="index.php" class="flex_v" > <img src="images/home 1.svg" alt="icone d'image"> <span>Accueil</span> </a> </div>

    <div class="total_body">


        <!--Formulaire d'inscription-->
         
        <div class="container_1">

            <div class="inscription">

                <h1> Inscrivez-vous !</h1>
        
                <p>L'utilisation de la plate-forme est uniquement possible
                    pour les abonnés, veuillez donc créer un compte pour l'utiliser.
                </p>
    
            </div>
    
            <form class="step_1" action="php/traitementInscription.php" method="post" >
        
                <div class="img_logo" >  <a href="index.php"><img src="images/logo.svg" alt="icone logo" ></a> </div>
        
                <div class="champs">

                    <label for="nom" class="label_nom" ></label>
                    <input type="text"  placeholder="Nom" name="nom" class="nom" id="nom" >
                
                    <label for="prenom" class="label_prenom" ></label>
                    <input type="text" placeholder="Prenom" name="prenom" class="prenom" id="prenom" >
                    
                    <label for="mail" class="label_mail" ></label>
                    <input type="mail"  placeholder="Email" name="mail" class="mail" id="mail" >
                    
                    <label for="password" class="label_password" ></label>
                    <div class="m_pass">
                        <input type="password"  placeholder="Mot de passe" class="password" id="password" name="password">
                        <img  class="hide_img" src="images/hide 1.svg" alt="hide image">
                    </div>

                    <label for="repassword" class="label_repassword" ></label>
                    <div class="m_pass">
                        <input type="password"  placeholder="Retapez le mot de passe" class="repassword" id="repassword" name="repassword">
                        <img  class="hide_img" src="images/hide 1.svg" alt="hide image">
                    </div>   
        
                </div>
        
        
                <div class="buttons" >
                    <button  class="annuler" name="annuler" > Annuler </button>
                    <button class="envoyer" name="inscription" > Continuer</button>
                </div>
        
            </form>
    </div> 



    <script src="js/config.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/traitementInscription.js" ></script>
    <script src="js/mainAccess.js" ></script>
    
    
</body>
</html>