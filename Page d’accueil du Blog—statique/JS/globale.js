
let ventes = [110, 75, 150, 180, 90, 130, 100, 160];

// 1. Initialisation
let nbVentes = 0;
let chiffreAffaires = 0;
let max = ventes[0];
let min = ventes[0];
let nbExceptionnelles = 0;
let caExceptionnel = 0;

// 2. Traitement : une seule boucle
for (let i = 0; i < ventes.length; i++) {
    let vente = ventes[i];

    // Nombre total de ventes
    nbVentes++;

    // Chiffre d'affaires total
    chiffreAffaires = chiffreAffaires + vente;

    // Recherche du maximum
    if (vente > max) {
        max = vente;
    }

    // Recherche du minimum
    if (vente < min) {
        min = vente;
    }

    // Ventes exceptionnelles : montant >= 130
    if (vente >= 130) {
        nbExceptionnelles++;
        caExceptionnel = caExceptionnel + vente;
    }
}

// 3. Affichage des résultats
console.log("Nombre total de ventes :", nbVentes);
console.log("CA Total :", chiffreAffaires);
console.log("Vente maximale :", max);
console.log("Vente minimale :", min);
console.log("Nombre de ventes exceptionnelles :", nbExceptionnelles);
console.log("CA des ventes exceptionnelles :", caExceptionnel);
