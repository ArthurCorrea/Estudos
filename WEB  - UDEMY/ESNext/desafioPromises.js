const fs = require('fs')
const path = require('path')

const caminho = path.join(__dirname, 'dados.txt')

function exibirConteudo(_, conteudo) {
    console.log(conteudo.toString())
}

const leitura = new Promise(resolve => {
    resolve(fs.readFile(caminho, exibirConteudo))
})

leitura.then(conteudo => console.log(conteudo))

