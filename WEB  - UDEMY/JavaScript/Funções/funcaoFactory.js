// funções Factory retornam um objeto

// Factory simples
function criarPessoa() {
    return {
        nome: 'Arthur',
        sobrenome: 'Corrêa'
    }
}

console.log(criarPessoa())


function criarOutraPessoa(nome, sobrenome, peso, altura) {
    return {
        nome: nome,
        sobrenome: sobrenome,
        peso: peso,
        altura: altura
    }
}

console.log(criarOutraPessoa('Arthur', 'Corrêa', 68, 1.7))



function criarProduto(nome, preco) {
    return {
        nome: nome,
        preço: preco,
        desconto: `R$${((preco * 20) / 100).toFixed(2)}`
    }
}

console.log(criarProduto('Bola', 30))
console.log(criarProduto('Bala', 70))
console.log(criarProduto('PC', 2500))
console.log(criarProduto('Maça', 10))
console.log(criarProduto('Lata', 15))
console.log(criarProduto('Helicóptero', 15000))