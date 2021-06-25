//** Curso completo de JavaScript*/

let isAtivo = false
console.log(isAtivo)

isAtivo = true
console.log(isAtivo)

isAtivo = 1
console.log(!!isAtivo) // transformando em boolano, usa-se ! ou !!
console.log(typeof !!isAtivo)
console.log(typeof isAtivo)

console.log("Os casos verdadeiros")
console.log(!!3)
console.log(!!-1)
console.log(!!' ') //string com ao menos um espaço
console.log(!![]) //array vazio
console.log(!!{}) //objeto literal
console.log(!!Infinity)
console.log(!!(isAtivo = true)) // se isAtivo é resolvido para verdadeiro, ele é verdadeiro;

console.log("Os casos falsos")
console.log(!!0)
console.log(!!'') //string 
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)
console.log(!!(isAtivo = false))

console.log('Para finalizar')
/* aqui ele converte cada um dos termos em
* verdadeiro ou false
* e faz a operação lógica
*/
console.log(('' || null || 0 || 'OK')) // retorna o primeiro verdadeiro
console.log(!!('' || null || 0 || 'OK')) // retorna o primeiro verdadeiro

let nome = ''
console.log(nome || 'Desconhecido')

nome = 'Genoaro'
console.log(nome || 'Desconhecido')