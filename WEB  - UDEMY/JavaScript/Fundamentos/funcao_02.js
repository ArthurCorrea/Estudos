// Armazenando uma função dentro de uma variável
const mostrarSoma = function (x, y) {
    console.log(x + y)
} 

mostrarSoma(5, 2)


// Armazenando uma função arrow em uma variável
const soma = (a, b) => {
    return a + b
}

console.log(soma(2, 4))


// retorno implícito
const subtracao = (a, b) => a - b
console.log(subtracao(8, 3))

const imprimir = a => console.log(a)
imprimir('Salve salve!')