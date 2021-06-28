//** Curso completo de JavaScript*/

console.log(7/0) // retorna o tipo "Infinity"
console.log("10"/2) // ele de fato divide 10 por 2, o / não faz sentido no mundo das strings
console.log("10" + 2) // Ele faz a concatenação por + faz sentido para strings
console.log("10" - 2) // ele subtrai pois não há sentido - no mundo das strings ... resp: NaN
console.log("10.2"/2) // Ele divide pois o / não faz sentido no mundo das strings 10 por 2 ... resp: NaN
/* no caso ele confere se é possível dividir o valor
* entre " " e, se possível, faz a divisão
*/
console.log("10,2"/2) // não é possível ... resp: NaN

console.log("Show!"*2) // Não é possível mostrar 2 "Shows!" dessa forma ... resp: NaN
console.log(0.1 + 0.7) // Há imprecisão do JS com relação a pontos flutuantes
// console.log(10.toString()) // não é possível em cima do literal;
//mas é possível em:
console.log((10.345).toString(2))