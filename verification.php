<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/background.css">
    <link rel="stylesheet" href="css/verification.css">
    <link rel="stylesheet" href="css/style.css
    ">
    <title>Inscription Portail Captif FUN HIGH TECH</title>
</head>
<body>

    <div class="background_band"></div>

    <div class="icone" > <a href="index.php" class="flex_v" > <img src="images/home 1.svg" alt="icone d'image"> <span>Accueil</span> </a> </div>

    <div class="total_body">



    <!--Formulaire de vérification-->

    
    <div class="container_2">
        

        <div class="verification">

            <h1> Vérification </h1>
    
            <p>Vérifions votre identité avec notre mécanisme d'authentification.
            </p>
    
        </div>

        <form class="step_2" action="#">

            <div class="img_logo" > <img src="images/logo.svg" alt="icone logo" > </div>
    
            <div class="champs ">

                <input type="number" required placeholder="Code secret" name="code" >
    
                <div class="reset_link" >
                    <a href="#"> Vous n'avez pas reçu le code ? <span>Renvoyer !</span> </a>
                </div>
                
            </div>
    
            <div class="buttons" >
                <button  class="soumettre" name="verification" > Soumettre </button>
            </div>

        </form>

        <div class="indication" >Un code secret a été envoyé à l'adresse mail <span>example@gmail.com</span>, Veuillez entrer le code secret !  </div>

    </div>  



    <script src="js/config.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/traitementInscription.js" ></script>
    <script src="js/mainAccess.js" ></script>
    
    
</body>
</html>