//** Curso completo de JavaScript*/

/* os objetos em JS trabalham com referencia, ou seja,
* quando se faz const a = {nome: "genoaro"} e depois 
* const b = a, b recebe o endereço de memória de a,
* portanto, sempre que ouver alteração do tipo b.nome = 'soares'
* a mudança será apresentada em a.
*/

/* no entanto, para valores primitivos não há essa correlação, 
* por exemplo, fazendo-se let c = d, c = 10 e d = 20,
* d terá valor de 20 e c terá valor de 10.
*/

let valor // ele aponta para um local de memória mas o valor não está definido;
console.log(valor)
//console.log(valor2) da um erro dizendo que valor2 nem foi declarado;

valor = null //ele não tem valor e nem mesmo endereço que aponte para algum local de memória;
console.log(valor)

//CUIDADOS!!//
//console.log(valor.toString()) // gera um problema do tipo "TypeErros:"

const produto = {}
console.log(produto.preco) // o produto está definido, mas o preco não está definido. (undefined)

produto.preco = 3.50
console.log(produto.preco)

produto.preco = undefined // !!! evite fazer essa atribuição !!!
console.log(!!produto.preco)
//para definir como undefined, faça delete.produto.preco

console.log(produto)