Array.prototype.map2 = function(callback) {

    const newArray = []

    for(let i = 0; i < this.length; i++) {
        newArray.push(callback(this[i], i, this))
    }

    return newArray

}

const carrinho = [
    '{"nome": "Borracha", "preco": 3.5}',
    '{"nome": "Caderno", "preco": 5.90}',
    '{"nome": "Caneta", "preco": 1.99}'
]

// Retornar um array apenas com os preços
const paraObjeto = json => JSON.parse(json)
const precos = produto => produto.preco

const resultado = carrinho.map2(paraObjeto).map2(precos)
console.log(resultado)