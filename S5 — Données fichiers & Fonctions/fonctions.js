
// 1. Fonction de calcul
function calculerSurface(longueur, largeur) {
    return longueur * largeur;
}

// 2. Fonction de décision
function estGrand(surface) {
    return surface >= 100;
}

// 3. Exécution et exploitation des résultats
let surfacePiece = calculerSurface(12, 10);
let grandePiece = estGrand(surfacePiece);

// 4. Affichage des résultats
console.log("Surface calculée : " + surfacePiece + " m²");
console.log("Grande pièce : " + grandePiece);

// 5. Fonction de selection 
function trouveMaximum(a, b) {
    if ( a > b) {
        return a;
    }
    return b;
}

let plusGrand = trouveMaximum(23, 35);
console.log("Le plus grand nombre est :" + plusGrand);