//** Curso completo de JavaScript*/

//armazenando uma função em uma constante;
// 1°
const imprimirSoma = function (a=0, b=0){
    console.log(a+b)
}

imprimirSoma(2,3)

//Armazenando uma funcao arrow em uma variavel
//2°
const soma = (a=0,b=0) => {
    return a+b
}
console.log(soma(2,3))

//3°
const subtracao = (a,b) => a-b //tem apenas uma sentença de código;
console.log(subtracao(2,3))

const imprimir = a => (console.log(a))
imprimir("Que legal!")
