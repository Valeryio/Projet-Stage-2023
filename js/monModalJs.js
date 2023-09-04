
// - Récupération de la box de l'historic

let historic_div = document.querySelector(".dark_background");
console.log(historic_div);


// - Récupération du bouton de l'historique

let historic_button = document.querySelector(".historic_button");
console.log(historic_button);


// - Mise en place de l'événement sur le bouton des paramètres

historic_button.addEventListener("click", show_historic());
function show_historic()
{
        historic_div.classList.remove("display_state_none");
        historic_div.classList.add("display_state_flex");
}



// - Mise en place de l'événement de fermeture sur la fenêtre d'abonnement

function close_historic()
{
    historic_div.addEventListener("click", (event) =>
    {
        event.target.classList.remove("display_state_flex");
        event.target.classList.add("display_state_none");
    });
}

close_historic();