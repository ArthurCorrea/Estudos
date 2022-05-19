const produtos = [
    { nome: 'PC', preco: 1499, fragil: true},
    { nome: 'iPad', preco: 2999, fragil: true},
    { nome: 'Madeira', preco: 49.90, fragil: false}
]

console.log(produtos.filter(function(p) {
    return false
}))

const caro = produto => produto.preco >= 500
const fragil = produto => produto.fragil

console.log(produtos.filter(caro).filter(fragil))