/* 29)  Utilizando a estrutura de repetição for, faça uma função que percorra um vetor e conte quantos números
deste vetor estão no intervalo [10,20] e quantos
deles estão fora do intervalo, escrevendo estas informações. */

const vetor = (valores = []) => {
    let intervalo10e20 = 0
    let foraDoIntervalo = 0

    let valoresDentroDoIntervalo = []
    let valoresForaDoIntervalo = []

    valores.forEach(valorAtual => {
        if(valorAtual >= 10 && valorAtual <= 20){
            valoresDentroDoIntervalo.push(valorAtual)
            intervalo10e20++
        } else {    
            valoresForaDoIntervalo.push(valorAtual)
            foraDoIntervalo++
        }
    });

    console.log(`Números entre 10 e 20: ${intervalo10e20} (${valoresDentroDoIntervalo})`)

    console.log(`Números fora do intervalo: ${foraDoIntervalo} (${valoresForaDoIntervalo})`)

    console.log('-----------------------------')

}

vetor([42, 12, 67, 4, 17, 19, 9])