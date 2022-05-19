/* 28) Ler um vetor de números inteiros e imprimir quantos são pares e quantos são ímpares.
*/

function verificarParImpar(valores = []) {
    let valoresPares = 0
    let valoresImpares = 0

    valores.forEach(par => {
        if(par % 2 == 0) {
            valoresPares++
        } else {
            valoresImpares++
        }
    });

    console.log(`${valoresPares} são pares e ${valoresImpares} são ímpares.`)

}

verificarParImpar([1, 2, 3, 4, 5, 6, 7, 8, 9, 10])
verificarParImpar([76, 213, 53, 65, 12, 65, 87, 34, 123, 54])