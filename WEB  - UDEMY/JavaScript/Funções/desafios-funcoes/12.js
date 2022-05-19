/* 12)  Faça um algoritmo que calcule o fatorial de um número */
function fatorial(numero) {
    let resultado = numero
    for(let i = 1; i < numero; i++) {
        resultado *= i
    }

    console.log(`O fatorial de ${numero} é ${resultado}.`)

}

fatorial(5)
fatorial(10)