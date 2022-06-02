function funcionarOuNao(valor, chanceDeErro) {
    return new Promise((resolve, reject) => {
        if(Math.random() < chanceDeErro) {
            // erro
            reject('Ocorreu um erro')
        } else {
            resolve(valor)
        }
    })
}

funcionarOuNao('Testando', 0.5)
    .then(valor => console.log(`Valor: ${valor}`))
    .catch(erro => console.log(`Erro: ${erro}`))
    .then(() => console.log('Fim!'))