function gerarNumerosEntre(min, max) {
    if(min > max) {
        [max, min] = [min, max]
    } 

    return new Promise(resolve => {
        const numAleatorio = parseInt(Math.random() * (max - min + 1) + min)
        resolve(numAleatorio)
    })
}

gerarNumerosEntre(40, 25)
    .then(num => num * 10)
    .then(numX10 => `Número gerado: ${numX10}`)
    .then(console.log)
