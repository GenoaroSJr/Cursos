{{{{ var sera = 'Será????' }}}}

console.log(sera)
/*var, dentro de um bloco de código que não seja função,
* será visível também fora do bloco
*/

function teste(){
    var local = 123
    console.log(local)
}

teste()
console.log(local) // local , mesmo sendo var, não está visível fora da função.

// var é definido como global, visível para todos;
// ou var é definido dentro de um escopo de função. 