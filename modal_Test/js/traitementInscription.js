// - ICi nous avons le traitement du formulaire d'inscription


/**
 * Ajout d'événement sur le formulaire seulement lors des interactions simples
 * 
 * Nous souhaitons que tous le formulaire soit très interactif, alors,
 * nous ajoutons le vérificateur de champs (la fonction traitemenFormulaire)
 * sur le formulaire, déjà lors d'un simple événement de type "input" !
 */

form_1.addEventListener("input", (event) =>
{
    traitementFormulaire(form_1);
});


/**
 * Ajout d'événement sur le bouton d'envoi
 * 
 * Le fait de rendre le formulaire interactif, ne fait que donner des indications
 * à l'utilisateur sur les bonnes pratiques qu'il doit respecter lors du remplissage
 * du formulaire.
 * 
 * Si nous ne faisons pas la vérification lors de la soumission, ce dernier peut très
 * bien ignorer nos alertes et faire passer des mauvaises données. 
 * Il faudra donc également faire un traitement, le premier traitement front-End.
 * Avant d'envoyer les données vers la database.
 */

form_1.addEventListener("submit", (primary_Event) => 
{

    // - Vérification de toutes les données entrées
    if (!traitementFormulaire())
    {
        primary_Event.preventDefault();
        console.log("No non no");
        return;
    }

    form_1.style.display = "none";

});