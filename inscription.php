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


    <!--Formulaire de vérification-->

<!--     
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

    </div>   -->


    <!--Formulaire de connexion-->


    <!-- <div class="container_3">

        <div class="connexion">

            <h1> Connectez-vous !</h1>
    
            <p>La connexion à la plate-forme nécessite le code contenu dans votre mail
                d'inscription ainsi que votre mot de passe.
            
            </p>

        </div>

        <form class="step_3"  action="#" method="" >

            <div class="img_logo" > <img src="images/logo.svg" alt="icone logo" > </div>

            <div class="champs flex_v">

                <div class="m_pass">
                    <input type="password" required placeholder="Code secret"  name="password">
                    <img  class="hide_img" src="images/hide 1.svg" alt="hide image">
                </div>

                <div class="m_pass">
                    <input type="password" required placeholder="Mot de passe"  name="password">
                    <img  class="hide_img" src="images/hide 1.svg" alt="hide image">
                </div>        

            </div>


            <div class="buttons" >
                <button  class="connex" name="connexion" > Connexion </button>
            </div>

        </form>

    </div> -->


    <script src="js/config.js" ></script>
    <script src="js/script.js" ></script>
    <script src="js/traitementInscription.js" ></script>
    <script src="js/mainAccess.js" ></script>
    
    
</body>
</html>