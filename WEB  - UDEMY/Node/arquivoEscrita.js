const fs = require('fs')

const produto = {
    nome: 'Celular',
    preco: 1500,
    desconto: 0.2
}

// salva um arquivo em formato .json
fs.writeFile(__dirname + '/arquivoGerado.json', JSON.stringify(produto), err => {
    console.log(err || 'Arquivo salvo com sucesso!')
})