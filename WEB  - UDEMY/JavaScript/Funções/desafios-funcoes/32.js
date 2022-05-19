/* 32) Construir um algoritmo que calcule a média aritmética dos valores de um vetor de inteiros */

const mediaArray = (valores = []) => {
    
    let totalArray = 0

    valores.forEach(valorAtual => {
        totalArray += valorAtual
    })

    console.log(`A média dos valores do array é: ${(totalArray / valores.length).toFixed(2)}`)

}

mediaArray([6, 3])
mediaArray([10, 20])
mediaArray([8, 4, 1, 7, 9, 5, 3, 6, 8, 1, 4, 8.4, 0.8, 5])