// - C'est le fichier dans lequel seront écrites toutes les fonctions


/**
 * estVideErreur - une fonction qui permet de gérer des execptions (Création d'erreur)
 * @balise: Le paramètre est une balise dont il pourra directement accéder à la valeur
 * 
 * Description: Cette fonction vérifie si la valeur à contenu dans une balise est
 * vide, et si tel est le cas, alors, il génère une exception!
 * Return: Rien !
 */

function estVideErreur(balise)
{
    if(balise.value.trim() == "")
    {
        throw new Error(`La valeur de la balise est vide`);
    }
}



/**
 * champVide - Une fonction pour vérifier si une balise est vide
 * ou pas.
 * @balise: L'argument que l'on doit vérifier
 * 
 * Description: Cette balise est utilisée pour vérifier si un événement
 * est vide, ou invalide. Invalide dans le cas où l'utilisateur va simplement
 * mettre un espace dans le champs.
 * 
 * Return: true ou false
 */

function champNonVide(balise)
{

    /**
     * Ici, le try évalue l'expression de la fonction estVideErreur(balise),
     * et si cette dernière lance ne serait-ce qu'une seule exception, alors
     * directement, cette dernière est rattrapée.
     * Dans le cas contraire, notre fonction peut renvoyer un true
     */
    try
    {
        estVideErreur(balise);
        return true;
    }
    catch (error)
    {
        console.error("Excepion -28 :" + error.message);
    }
}



/**
 * passwordChecker - une fonction qui vérifie les mots de passe
 * @passwordTag: Le mot de passe que nous voulons vérifier
 * 
 * Description: Cette fonction permet de vérifier si un mot de passe
 * vérifie les normes mises en place
 * Return: true of false
 */

function passwordChecker(passwordTag)
{

    let regexVerification = new RegExp("^(?=.*\\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}");


    if(regexVerification.test(passwordTag.value))
    {
        return true;
    }
    else
    {
        return false;
    }
}



/**
 * Une fonction qui permet de faire de la vérification sur le nom envoyé par 
 * l'utilisateur
 * 
 * @param {event object} e_1 - Un object événement sur la balise concernée
 * @param {HTMLElement} nom - La balise qui est concernée 
 * @param {HTMLElement} form - Le formulaire à utiliser
 * @returns {boolean} true/false - En fonction de la vérification effectuée
 */

function verificationNom(e_1, nom, form)
{

    // - Récupération du label relatif au nom
    let label_nom = document.querySelector(".step_1 .label_nom");

    if (champNonVide(e_1.target))
    {
        label_nom.style.color = "#008000";
        nom.style.border = "2px solid #008000";
        label_nom.innerHTML = "";

        return true;
    }
    else
    {
        label_nom.style.color = "#ff1a40";
        nom.style.border = "2px solid #ff1a40";
        label_nom.innerHTML = "Veuillez entrer un nom valide !";

        return false;
    }
}



/**
 * Une fonction qui permet de faire de la vérification sur le prenom envoyé par 
 * l'utilisateur
 * 
 * @param {event object} e_2 - Un object événement sur la balise concernée
 * @param {HTMLElement} prenom - La balise qui est concernée
 * @param {HTMLElement} form - Le formulaire à utiliser
 * @returns {boolean} true/false - En fonction de la vérification effectuée
 */

function verificationPrenom(e_2, prenom, form)
{
    // - Récupération du label relatif au prénom
    label_prenom = document.querySelector(".step_1 .label_prenom");

    if (champNonVide(e_2.target))
    {
        label_prenom.style.color = "#008000";
        prenom.style.border = "2px solid #008000";
        label_prenom.innerHTML = "";

        return true;
    }
    else
    {
        label_prenom.style.color = "#ff1a40";
        prenom.style.border = "2px solid #ff1a40";
        label_prenom.innerHTML = "Veuillez entrer un prenom valide !";

        return false;
    }
}



/**
 * Une fonction qui permet de faire de la vérification sur le mail envoyé par 
 * l'utilisateur
 * 
 * @param {event object} e_3 - Un object événement sur la balise concernée
 * @param {HTMLElement} mail - La balise qui est concernée
 * @param {HTMLElement} form - Le formulaire à utiliser
 * @returns {boolean} true/false - En fonction de la vérification effectuée
 */

function verificationMail(e_3, mail, form)
{
    // - Récupération du label relatif au mail
    let label_mail = document.querySelector(".step_1 .label_mail");
    let regex = new RegExp("[a-z0-9._-]+@[a-z0-9._-]+\.[a-z0-9._-]+");

    if(champNonVide(e_3.target) && regex.test(e_3.target.value))
    {
        label_mail.style.color = "#008000";
        mail.style.border = "2px solid #008000";
        label_mail.innerHTML = "";

        return true;
    }
    else
    {
        label_mail.style.color = "#ff1a40";
        label_mail.innerHTML = "Mail invalide !";
        mail.style.border = "2px solid #ff1a40";

        return false;
    }
}



/**
 * Une fonction qui permet de faire de la vérification sur le mot de passe envoyé par 
 * l'utilisateur
 * 
 * @param {event object} e_3 - Un object événement sur la balise concernée
 * @param {HTMLElement} password - La balise qui est concernée 
 * @param {HTMLElement} form - Le formulaire à utiliser
 * @returns {boolean} true/false - En fonction de la vérification effectuée
 */

function verificationPassword(e_4, password, form)
{
    // - Récupération du label du mot de passe
    label_password = document.querySelector(".step_1 .label_password");

    if(passwordChecker(e_4.target))
    {
        label_password.style.color = "#008000";
        password.style.border = "2px solid #008000";
        label_password.innerHTML = "";

        return true;
    }
    else
    {
        label_password.style.color = "#ff1a40";
        password.style.border = "2px solid #ff1a40";
        label_password.innerHTML = "Entrez une majuscule, une minuscule, une lettre et un symbole";

        return false;
    }
}



/**
 * Une fonction qui permet de faire de la vérification sur le mot de passe envoyé par 
 * l'utilisateur
 * 
 * @param {event object} e_3 - Un object événement sur la balise concernée
 * @param {HTMLElement} password - La balise qui est concernée 
 * @param {HTMLElement} form - Le formulaire à utiliser
 * @returns {boolean} true/false - En fonction de la vérification effectuée
 */

function approuverPassword(e_5, repassword, form)
{
    // - Récupération du label du recopiage mot de passe
    label_repassword = document.querySelector(".step_1 .label_repassword");

    if(e_5.target.value == password.value)
    {
        label_repassword.style.color = "#008000";
        repassword.style.border = "2px solid #008000";
        label_repassword.innerHTML = "";

        return true;
    }
    else
    {
        label_repassword.style.color = "#ff1a40";
        repassword.style.border = "2px solid #ff1a40";
        label_repassword.innerHTML = "Les deux mots de passe entrés sont différents !";

        return false;
    }
}



/**
 * Une fonction qui empêche la soumission du formulaire
 * @summary Cette fonction empêche totalement la soumission du formulaire
 * si jamais cette dernière est appelée
 * 
 * @param {HTMLElement} - La balise form qui est prise en compte
 */

function noSoumission(form)
{
    form.addEventListener("submit", (event)=>
    {
        event.preventDefault();
    })

}



/**
 *  Une fonction qui permet de gérer les différents champs du formulaire
 * 
 * @summary - Cette fonction se charge de vérifier les différents champs du
 * formulaire, et pour cela, elle déclenche un évenement d'écoute sur chacun
 * des champs de ce formulaire, et en fonction des données fait des recommandations.
 * 
 * Elle ne fait pas tous le travail, mais se charge d'appeler des petites fonctions
 * qui se chargent de lui renvoyer toutes les données dont elle a besoin.
 * 
 * @param {HTMLElement} form_1 - la balise relative au formulaire 
 * @returns 
 */

function traitementFormulaire(form_1)
{

    // Récupération de tous les champs du formulaire
    let nom = document.querySelector(".step_1 .nom");
    let mail = document.querySelector(".step_1 .mail");
    let prenom = document.querySelector(".step_1 .prenom");
    let password = document.querySelector(".step_1 .password");
    let repassword = document.querySelector(".step_1 .repassword");


    // - Vérifications sur le champ du nom
    nom.addEventListener("change", (e_1) => 
    {
        nom_valide = verificationNom(e_1, nom, form_1)
    });

    // - Vérifications sur le champ du prenom
    prenom.addEventListener("change", (e_2) => 
    {
        prenom_valide = verificationPrenom(e_2, prenom, form_1)
    });

    // - Vérifications sur le champ du mail
    mail.addEventListener("change", (e_3) =>
    {
        mail_valide = verificationMail(e_3, mail, form_1);
    });

    // - Vérification sur le champs du mot de passe
    password.addEventListener("change", (e_4) => 
    {
        password_valide = verificationPassword(e_4, password, form_1);
    });

    repassword.addEventListener("input", (e_5) => 
    {
        repassword_valide = approuverPassword(e_5, repassword, form_1);  
    });
    
    return afficheResultats();

};


/**
 * Traitement formulaire de connexion
 * 
 */



function traitementFormConnexion()
{ 


}












/**
 * Vérifier si toutes les valeurs envoyées sont correctes
 * 
 * @summary - Cette fonction vérifie si toutes les données envoyées
 * sont valides. Et pour cela, elle utilise les variables globales qui sont
 * définies dans la fonction. Elle s'assure que toutes ces variables sont 
 * bel et bien à true, avant de valider la fonction.
 * 
 * @returns {boolean} true/false
 */

function afficheResultats()
{
    if(nom_valide && prenom_valide && mail_valide && password_valide && repassword_valide)
    {
      console.log("Superbe tout est valide");

      return true;
    }
    else
    {
      console.log("Non non non, tout n'est pas valide!");

      return false;
    }
}


/**
 * 
 * @param {HTMLElement} eye - Une balise HTML 
 */


function eyeShow(eye)
{

    let mpass = document.querySelectorAll(".m_pass");
    console.log(mpass);

   /* for ( i = 0; i < mpass.length; i++)
    {

        // - Sélection de la balise input elle-même
        let passwordField = mpass[i].children[0];
        console.log(passwordField);

        let passwordType = passwordField.type;

        let hidden_img = mpass[i].children[1];
        console.log(hidden_img);

        hidden_img.addEventListener("click", (e) =>
        {
            if(passwordType == "password")
            {
                passwordField.setAttribute("type", "text");
                hidden_img.src = "images/view.svg"
            }
            else
            {      
                passwordField.setAttribute("type", "password");
                hidden_img.src = "images/hide 1.svg"
            }

        });

    }

    for (each of mpass)
    {

        let eyeButton = document.querySelector(` ${each}  .hide_img`);

        eyeButton.addEventListener( "click", (eye) =>
        {
            console.log("J'ai le buton");
            let passwordField = document.querySelector(` ${pass} .password`);
            let hidden_img = document.querySelector(".m_pass .hide_img");

    
            // - Vérification de la valeur du type en question
            let passwordType = passwordField.type;
    
            if(passwordType == "password")
            {
                passwordField.setAttribute("type", "text");
                hidden_img.src = "images/view.svg"
            }
            else
            {
                
                passwordField.setAttribute("type", "password");
                hidden_img.src = "images/hide 1.svg"
            }
            
        });
    }

}

eyeShow();*/

}