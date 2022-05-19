const numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]

// .maps gera um novo array, e não modifica o original
let resultadoDobro = numeros.map(elemento => elemento * 2)

console.log(resultadoDobro)


const soma10 = e => e + 10
const triplo = e => e * 3
const paraDinheiro = e => `R$${parseFloat(e).toFixed(2).replace('.', ',')}`

resultado = numeros.map(soma10).map(triplo).map(paraDinheiro)
console.log(resultado)

