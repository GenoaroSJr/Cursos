//** Curso completo de JavaScript*/

const peso1 = 1.0
const peso2 = Number('2.0')

console.log(peso1, peso2)
console.log(Number.isInteger(peso1))
console.log(Number.isInteger(peso2))

const avaliacao1 = 9.871
const avaliacao2 = 6.871

const total = avaliacao1 * peso1 + avaliacao2 * peso2
const media = total / (peso1 + peso2)

//Aqui define-se o número de casa decimais;
console.log(media.toFixed(2)) 

//converter Numerico em String
console.log(media.toString())
//converter Numerico em String binário
console.log(media.toString(2)) //acrescenta o 2

/* toString são funções, eles recebem o valor e retornam um resultado,
* no entanto, o valor não é alterado em sua declaração orginal.
*/

console.log(typeof media) // ainda é definido como number

// number -> c/ letra minuscula é o tipo
// Number -> c/ letra maiscula é a função.