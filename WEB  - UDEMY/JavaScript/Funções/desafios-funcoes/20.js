/* 20) Crie um programa para informar quais e quantas notas são necessárias para entregar o mínimo de cédulas
para um determinado valor informado pelo usuário considerando notas de R$ 100, R$ 50, R$ 10 e R$ 5 e R$ 1.
Seu programa deve mostrar apenas as notas utilizadas. Por exemplo, ao solicitar R$18, o programa deve
informar apenas a seguinte informação (note que não foram exibidas informações sobre as demais cédulas): 1
nota(s) de R$ 10. 1 nota(s) de R$ 5. 3 nota(s) de R$ 1. */

const pontos = () => {
    console.log('-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-')
}

const saque = (valorDoSaque) => {
    notas100 = notas50 = notas10 = notas5 = notas1 = 0

    let valorNota = calcularValorNota(valorDoSaque)

    while(valorDoSaque >= valorNota) {
        switch(valorNota) {
            case 100:
                valorDoSaque -= 100
                notas100++
                break;
            case 50:
                valorDoSaque -= 50
                notas50++
                break;
            case 10:
                valorDoSaque -= 10
                notas10++
                break;
            case 5:
                valorDoSaque -= 5
                notas5++
                break;
            case 1: 
                valorDoSaque -= 1
                notas1++
                break;
        }

        valorNota = calcularValorNota(valorDoSaque)

    }

    return montarResultado(notas100, notas50, notas10, notas5, notas1)
    
}


const calcularValorNota = (valorDoSaque) => {
    if(valorDoSaque >= 100) {
        return 100
    } else if(valorDoSaque >= 50) {
        return 50
    } else if(valorDoSaque >= 10) {
        return 10
    } else if(valorDoSaque >= 5) {
        return 5
    } else if(valorDoSaque >= 1) {
        return 1
    }
}

function montarResultado(notas100, notas50, notas10, notas5, notas1) {
    let resultado = ''

    if(notas100 > 0) {
        resultado += `${notas100} nota(s) de R$100,00 \n`
    }

    if (notas50 > 0) {
        resultado += `${notas50} nota(s) de R$50,00. \n`
    }

    if (notas10 > 0) {
        resultado += `${notas10} nota(s) de R$10,00. \n`
    }

    if (notas5 > 0) {
        resultado += `${notas5} nota(s) de R$5,00. \n`
    }

    if (notas1 > 0) {
        resultado += `${notas1} nota(s) de R$1,00.`
    }

    return resultado

}

console.log(saque(127))
pontos()
console.log(saque(948))
pontos()
console.log(saque(1879))
pontos()
console.log(saque(23753))