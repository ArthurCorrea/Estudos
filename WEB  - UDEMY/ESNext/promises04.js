function gerarNumerosEntre(min, max, tempo = 2000) {
    if(min > max) {
        [max, min] = [min, max]
    } 

    return new Promise(resolve => {
        setTimeout(function() {
            
            const numAleatorio = parseInt(Math.random() * (max - min + 1) + min)
            resolve(numAleatorio)
        }, tempo)
    })
}

function gerarVariosNumeros() {
    return Promise.all([
        gerarNumerosEntre(1, 50),
        gerarNumerosEntre(50, 90, 400),
        gerarNumerosEntre(100, 143, 40),
        gerarNumerosEntre(1, 50),
        gerarNumerosEntre(50, 90, 400),
        gerarNumerosEntre(100, 143, 40)
    ])
}

gerarVariosNumeros()
    .then(numeros => console.log(numeros))

