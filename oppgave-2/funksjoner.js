/* funksjoner.js
   Felles JavaScript-funksjoner brukt i applikasjonen
*/

// enkel funksjon for bekreftelse, tar valgfri tekst
function bekreft(type) {
  if (!type) type = "den valgte posten";
  return confirm("Er du sikker på at du vil slette " + type + "?");
}

// Alternativ: gjør funksjonen synlig i window (ikke nødvendig i vanlig browserscope,
// men på noen oppsett kan dette hjelpe)
window.bekreft = bekreft;
