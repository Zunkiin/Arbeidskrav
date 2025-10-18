/* funksjoner.js - brukes til bekreftelse ved sletting */

function bekreft() {
  return confirm("Er du sikker på at du vil slette denne?");
}

window.bekreft = bekreft; // gjør funksjonen synlig globalt
console.log("funksjoner.js lastet");
