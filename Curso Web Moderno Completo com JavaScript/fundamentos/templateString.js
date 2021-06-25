//** Curso completo de JavaScript*/

const nome = 'Rebeca';
const concatenacao = 'Olá ' + nome + '!';

// usando 'Template String'
/*O template string considera tudo o que
* for escrito dentro do template,
* inclusive os tabs ou espaços
*/
const template = `
    Olá
    ${nome}!`
console.log(concatenacao, template)

// o ` ` interpola os valores;
console.log(`1 + 1 = ${1+1}`)

const up = texto =>  texto.toUpperCase()
//chamar função dentro do tramplate string
console.log(`Ei... ${up('cuidado')}!`)