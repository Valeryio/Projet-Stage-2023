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


    // Mise en place des variables de vérification
    let nom_valide;
    let prenom_valide;
    let mail_valide;
    let password_valide;
    let repassword_valide;

function traitementFormulaire(form_1)
{
    //console.log("Dans le input !");

    // Récupération de tous les champs du formulaire
    let nom = document.querySelector(".step_1 .nom");
    let mail = document.querySelector(".step_1 .mail");
    let prenom = document.querySelector(".step_1 .prenom");
    let password = document.querySelector(".step_1 .password");
    let repassword = document.querySelector(".step_1 .repassword");





    // - Vérifications sur le champ du nom
    nom.addEventListener("input", (e_1) => 
    {

        // - Récupération du label relatif au nom
        let label_nom = document.querySelector(".step_1 .label_nom");

        if (champNonVide(e_1.target))
        {
            label_nom.style.color = "#008000";
            nom.style.border = "2px solid #008000";
            label_nom.innerHTML = "";

            console.log("Je renvoie true !");

            // return true;

            nom_valide = true;
        }
        else
        {
            label_nom.style.color = "#ff1a40";
            nom.style.border = "2px solid #ff1a40";
            label_nom.innerHTML = "Veuillez entrer un nom valide !";

            noSoumission(form);

            return false;
        }

    });

    // - Vérifications sur le champ du prenom
    prenom.addEventListener("change", (e_2) => 
    {
        // - Récupération du label relatif au prénom
        label_prenom = document.querySelector(".step_1 .label_prenom");

        if (champNonVide(e_2.target))
        {
            label_prenom.style.color = "#008000";
            prenom.style.border = "2px solid #008000";
            label_prenom.innerHTML = "";
            // return true;

            prenom_valide = true;
        }
        else
        {
            label_prenom.style.color = "#ff1a40";
            prenom.style.border = "2px solid #ff1a40";
            label_prenom.innerHTML = "Veuillez entrer un prenom valide !";

            noSoumission(form);

            // return false;

        }
    });

    // - Vérifications sur le champ du mail
    mail.addEventListener("change", (e_3) =>
    {
        // - Récupération du label relatif au mail
        let label_mail = document.querySelector(".step_1 .label_mail");
        let regex = new RegExp("[a-z0-9._-]+@[a-z0-9._-]+\.[a-z0-9._-]+");

        if(champNonVide(e_3.target) && regex.test(e_3.target.value))
        {
            label_mail.style.color = "#008000";
            mail.style.border = "2px solid #008000";
            label_mail.innerHTML = "";
            // return true;

            mail_valide = true;
        }
        else
        {
            label_mail.style.color = "#ff1a40";
            label_mail.innerHTML = "Mail invalide !";
            mail.style.border = "2px solid #ff1a40";

            noSoumission(form);

            // return false;
        }
    });

    // - Vérification sur le champs du mot de passe
    password.addEventListener("change", (e_4) => 
    {
        // - Récupération du label du mot de passe
        label_password = document.querySelector(".step_1 .label_password");

        if(passwordChecker(e_4.target))
        {
            label_password.style.color = "#008000";
            password.style.border = "2px solid #008000";
            label_password.innerHTML = "";
            // return true;

            password_valide = true;

        }
        else
        {
            label_password.style.color = "#ff1a40";
            password.style.border = "2px solid #ff1a40";
            label_password.innerHTML = "Entrez une majuscule, une minuscule, une lettre et un symbole";

            noSoumission(form);

            // return false;
        }
    });

    repassword.addEventListener("change", (e_5) => 
    {

        // - Récupération du label du recopiage mot de passe
        label_repassword = document.querySelector(".step_1 .label_repassword");

        if(e_5.target.value == password.value)
        {
            label_repassword.style.color = "#008000";
            repassword.style.border = "2px solid #008000";
            label_repassword.innerHTML = "";
            // return true;

            repassword_valide = true;
        }
        else
        {
            label_repassword.style.color = "#ff1a40";
            repassword.style.border = "2px solid #ff1a40";
            label_repassword.innerHTML = "Les deux mots de passe entrés sont différents !";

            // return false;
        }
    });

    afficheResultats();



};

function afficheResultats()
{
    if(nom_valide && prenom_valide && mail_valide && password_valide && repassword_valide)
    {
      console.log("Superbe tout est valide");
    }
    else
    {
  
      console.log(
          " On a nom : " + nom_valide,
          " On a prenom : " + prenom_valide,
          " On a mail : " + mail_valide,
          " On a password : " + password_valide,
          " On a repassword : " + repassword_valide
      );
  
      console.log("Non non non, tout n'est pas valide!");
    }
}