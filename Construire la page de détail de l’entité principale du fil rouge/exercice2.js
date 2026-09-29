for (let i = 1; i <= 20; i++) {
    if (i % 2 === 0) {
        console.log(i); // Affiche uniquement 2, 4, 6, 8, 10, 12, 14, 16, 18, 20
    }
}




let somme = 0;
for (let i = 1; i <= 10; i++) {
    somme += i; // Ajoute chaque nombre à la somme
}
console.log(somme); // Affiche la somme des nombres de 1 à 10




let compteur = 0;
let summe = 0;
for (let nombre = 1; nombre <= 20; nombre++) {
    if (nombre % 2 === 0) {
        compteur++;
        summe = summe + nombre;
    }
}

console.log("Nombre de pairs : " + compteur);
console.log("Summe des pairs : " + summe);