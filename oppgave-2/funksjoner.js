/* funksjoner.js - felles JS-funksjoner */
function bekreftSletting(type) {
  // type er valgfritt (f.eks. 'student' eller 'klasse')
  if (!type) type = "posten";
  return confirm("Er du sikker på at du vil slette " + type + "?");
}

// Testlinje (fjern eller kommenter ut når du har verifisert at filen lastes):
// alert("funksjoner.js lastet");

