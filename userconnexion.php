<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/style.css
    ">
    <title>Inscription Portail Captif FUN HIGH TECH</title>
</head>
<body>

    <div class="background_band"></div>

    <div class="icone" > <a href="index.php" class="flex_v" > <img src="images/home 1.svg" alt="icone d'image"> <span>Accueil</span> </a> </div>

    <div class="total_body">



    <!--Formulaire de connexion-->


    <div class="container_3">

        <div class="connexion">

            <h1> Connectez-vous !</h1>
    
            <p>La connexion à la plate-forme nécessite le code contenu dans votre mail
                d'inscription ainsi que votre mot de passe.
            
            </p>

        </div>

        <form class="step_3"  action="#" method="" >

            <div class="img_logo" > <img src="images/logo.svg" alt="icone logo" > </div>

            <div class="champs flex_v">
                
            <label for="label_mail" class="labelMail" ></label>
                <div class="m_pass">
                    <input type="mail" required placeholder="Email" class="mail"  name="mail">
                    <!-- <img  class="hide_img" src="images/hide 1.svg" alt="hide image"> -->
                </div>

                <div class="m_pass">
                    <label for="label_password" class="labelPassword" ></label>
                    <input type="password" required placeholder="Mot de passe" class="password" id="label_password" name="password">
                    <img  class="hide_img" src="images/hide 1.svg" alt="hide image">
                </div>        

            </div>


            <div class="buttons" >
                <button  class="connex" name="connexion" > Connexion </button>
            </div>

        </form>

    </div>


    <script src="js/config.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/traitementConnexion.js" ></script>
    <script src="js/mainAccess.js" ></script>
    
    
</body>
</html>