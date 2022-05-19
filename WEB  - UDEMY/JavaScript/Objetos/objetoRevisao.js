// Dinamicidade de pares chave/valor

const produto = new Object

produto.nome = 'Mesa'
produto['Marca'] = 'Razer'
produto.preco = 250

console.log(produto)

delete produto.preco
console.log(produto)


// Um objeto mais complexo
const carro = {
    modelo: 'M5',
    valor: 50000,
    
    dono: {   // objeto dentro de um objeto
        nome: 'Cleiton',
        idade: 55,
        endereco: {     
            rua: 'Rua ABC',
            numero: 123
        }
    },

    pilotos: [{      // objeto com array (vários objetos)
        nome: 'Lucas',
        idade: 23
    }, {
        nome: 'Ana',
        idade: 30
    }],

    calcularSeguro: function() {

    }

}

carro.dono.endereco.rua = 'Rua Tchununsbango'
console.log(carro)

delete carro.pilotos  // tudo abaixo de pilotos será excluído
console.log(carro)