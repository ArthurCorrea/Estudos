/* 4) Crie uma função que irá receber dois valores, o dividendo e o divisor. A função deverá imprimir o resultado
e o resto da divisão destes dois valores */

const exercicioDivisao = (dividendo, divisor) => {
    
    let divisao = dividendo / divisor
    let modulo = dividendo % divisor

    console.log(`${dividendo} / ${divisor} = ${divisao.toFixed(2)}\nResto da divisão: ${modulo.toFixed(2)}`)

    console.log('------------------------')

}

exercicioDivisao(2, 2)
exercicioDivisao(6, 4)
exercicioDivisao(6763423, 521)
exercicioDivisao(4124312664587, 123123)