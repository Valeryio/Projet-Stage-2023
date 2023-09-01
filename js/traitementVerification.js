// - Sélection de la balise qui affiche le temps

let timer = document.querySelector(".the_timer");
console.log(timer);

console.log(Date.now);

timer.innerHTML = Date.now();

