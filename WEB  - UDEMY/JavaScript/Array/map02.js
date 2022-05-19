const carrinho = [
    '{"nome": "Borracha", "preco": 3.5}',
    '{"nome": "Caderno", "preco": 5.90}',
    '{"nome": "Caneta", "preco": 1.99}'
]

// Retornar um array apenas com os preços
const paraObjeto = json => JSON.parse(json)
const precos = produto => produto.preco

const resultado = carrinho.map(paraObjeto).map(precos)
console.log(resultado)