//** Curso completo de JavaScript*/

const escola = "Cod3r"

console.log(escola.charAt(4)) // pega o 4° caracter da string (r);
console.log(escola.charAt(5)) // retorna um valor vazio, passa do maximo do vetor;

console.log(escola.charCodeAt(3)) // É o valor ASCII da 3° posição do vetor;

//procuando valor no index
console.log(escola.indexOf('3')) // tem o 3 na string?

console.log(escola.substring(1)) // pula o primeiro valor do index;
console.log(escola.substring(0, 3)) // vai imprimir do 0 ao 3-1

//concatenar
console.log('Escola '.concat(escola).concat("!"))
console.log('Escola ' + escola + "!") // mesma coisa de cima
console.log(escola.replace(3, 'e')) // troca posição 3 do index por e

console.log(escola.replace(/\d/, 'e')) // operações em Regex;
/* Em ciência da computação, uma expressão regular ou 
* "Regex" provê uma forma concisa e flexível de identificar cadeias de 
* caracteres de interesse, como caracteres particulares, palavras ou 
* padrões de caracteres;
*/

console.log('Ana,Maria,Pedro'.split(',')) // Convertendo em array;
//console.log('10+20-20/50'.split('+' | '-' | '/')) testando;