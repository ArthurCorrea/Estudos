function gerarNumerosEntre(min, max, numerosRepetidos) {
    if(min > max) {
        [max, min] = [min, max]
    } 

    return new Promise((resolve, reject) => {
        const numAleatorio = parseInt(Math.random() * (max - min + 1) + min)
        if(numerosRepetidos.includes(numAleatorio)) {
            reject('Número repetido.')
        } else {
            resolve(numAleatorio)
        }  
    })
}

async function gerarMegaSena(qtdeNumeros, tentativas = 1) {
    
    try {
        const numeros = []
        for(let _ of Array(qtdeNumeros).fill()) {
            numeros.push(await gerarNumerosEntre(1, 60, numeros))
        }
        return numeros

    } catch(erro) {
        if(tentativas > 10) {
            throw 'Deu errado!'
        } 
        return gerarMegaSena(qtdeNumeros, tentativas + 1)
    }
}

gerarMegaSena(8)
    .then(console.log)
    .catch(console.log)

