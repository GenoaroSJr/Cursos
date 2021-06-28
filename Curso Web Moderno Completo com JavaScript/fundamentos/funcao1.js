//** Curso completo de JavaScript*/

function imprimirSoma(a, b){
    console.log(a+b)
}

imprimirSoma(10+20)
imprimirSoma(10) // o b é undefined e a é 10, undefined + 10 = NaN

//tratando os parametros
function soma(a, b=0){
    return a+b
}

console.log(soma(2,3))
console.log(soma(2))
