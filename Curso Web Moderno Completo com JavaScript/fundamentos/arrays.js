//** Curso completo de JavaScript*/

const valores = [7.7, 8.9, 6.3, 9.2]
console.log(valores[0], valores[3])
console.log(valores[4]) // saída "undefined"

valores[4] = 10
console.log(valores)

valores[10] = 10
console.log(valores)

//mostra o tamanho do array
console.log(valores.length)

//adiciona novos elementos no array
//aqui mostra-se a heterogeneidade do array em javascript 
valores.push({id: 3}, false, null, 'teste')
console.log(valores)
// o ideial é construir um array homogenio, criar cada array para cada tipo;

//tira o último valor do array
console.log(valores.pop())
//tira o valor do array
delete valores[0] // deleta no idice 0
console.log(valores)

console.log(typeof valores)