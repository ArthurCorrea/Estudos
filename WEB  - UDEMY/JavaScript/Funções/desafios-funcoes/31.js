/* 31)  Escrever um algoritmo que percorre um vetor de inteiros, conta quantos números negativos há nesse vetor
e imprime a quantidade no console. */

function acharNegativos(numeros = []) {

    let valoresNegativos = 0

    numeros.forEach(valorAtual => {
        if(valorAtual < 0) {
            valoresNegativos++
        }
    })

    console.log(`Quantidade de valores negativos: ${valoresNegativos}`)

}

acharNegativos([6, 3, 7, 8, -1, -5, 5])