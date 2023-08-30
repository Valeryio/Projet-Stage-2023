// - Sélection des différentes variables relatives au fichier de connexion

let mail_connexion = document.querySelector(".step_3 .mail");
let password_connexion = document.querySelector(".step_3 .password");
console.log(password_connexion);
console.log(mail_connexion);

let form_2 = document.querySelector(".step_3");
let regexMail = new RegExp("[a-z0-9._-]+@[a-z0-9._-]+\.[a-z0-9._-]+");


// Vérification sur les champs de connexion
mail_connexion.addEventListener("change", (event) =>
{
    console.log("Okay");
    console.log(event.target.value);

    let labelMailConnexion = document.querySelector(".labelMail");
    console.log(labelMailConnexion);

    if( champNonVide(event.target) && regexMail.test(event.target.value) )
    {
        labelMailConnexion.style.color = "#008000";
        mail_connexion.style.border = "2px solid #008000";
        labelMailConnexion.innerHTML = "";
    }
    else
    {
        labelMailConnexion.style.color = "#ff1a40";
        mail_connexion.style.border = "2px solid #ff1a40";
        labelMailConnexion.innerHTML = "Entrez une majuscule, une minuscule, une lettre et un symbole";

    }

});
   


password_connexion.addEventListener("change", (event_1) => 
{
    let labelPasswordConnexion = document.querySelector(".m_pass .labelPassword");
    console.log(labelPasswordConnexion);

    if(passwordChecker(event_1.target))
    {
        console.log("Le mot de passe est bon");
        labelPasswordConnexion.style.color = "#008000";
        password_connexion.style.border = "2px solid #008000";
        labelPasswordConnexion.innerHTML = "";
    }
    else
    {
        labelPasswordConnexion.style.color = "#ff1a40";
        password_connexion.style.border = "2px solid #ff1a40";
        labelPasswordConnexion.innerHTML = "Entrez une majuscule, une minuscule, une lettre et un symbole";
    }

});