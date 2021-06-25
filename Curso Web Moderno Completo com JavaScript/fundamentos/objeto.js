//** Curso completo de JavaScript*/

/* objeto em js é uma coleção
* de chaves e valores
*/

const prod1 = {} // forma literal de se escrever um objeto;
prod1.nome = 'Celular ultra mega' 
/* a chave nome é criada automaticamente e passa-se
* o valor da string para ela
*/ 
console.log(prod1)

prod1.preco = 1000.02 // cria também dinamicamente 
console.log(prod1)

const prod2 = {
    nome: 'Camisa Polo',
    preco: 79.90
}
console.log(prod2)

const prod3 = {
    nome: "Computador",
    detalhes: {
        cor: "Preto",
        local: {
            Pais: "Brasil"
        }
    }
}
console.log(prod3)
