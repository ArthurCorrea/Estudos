/* 30) Escreva um algoritmo que percorre um vetor de inteiros e defina o maior e menor valor dentro do vetor. */

function maiorMenor(valores = []){

    let maior = valores
    Array.max = function(maior){
        return Math.max.apply(Math, maior)
    }

    maiorValor = Array.max(maior)

    let menor = valores
    Array.min = function(menor){
        return Math.min.apply(Math, menor)
    }

    menorValor = Array.min(menor)

    console.log(`Maior valor: ${maiorValor}`)
    console.log(`Menor valor: ${menorValor}`)

    console.log('----------------------------')

}

maiorMenor([7, 3, 5, 67, 8, 9, 1, 6, 7, 8, 4, 49, 98])
maiorMenor([8, 7, 2, 4, 7, 9, 10, 12, 18, 11.6])