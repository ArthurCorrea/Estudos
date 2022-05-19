function getPreco(imposto = 0, moeda = 'R$') {
    
    return `${moeda}${this.preco * (1 - this.desconto) * (1 + imposto)}`

}

const criarProduto = {
    nome: 'PC',
    preco: 5500,
    desconto: 0.2,
    getPreco
}

console.log(criarProduto.getPreco())



const carro = {
    preco: 39990, 
    desconto: 0.2
}

console.log(getPreco.call(carro))
console.log(getPreco.apply(carro))

console.log(getPreco.call(carro, 0.15, '$'))

console.log(getPreco.apply(carro, [0.15, '$']))
