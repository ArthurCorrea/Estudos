ativo = true
console.log('Verdadeiros')
console.log(!!3)           // não não
console.log(!!-1)
console.log(!!' ')
console.log(!!'texto')
console.log(!![])
console.log(!!{})
console.log(!!Infinity)
console.log(!!(ativo = true))

console.log('Falsos')
console.log(!!0)
console.log(!!'')
console.log(!!null)
console.log(!!NaN)
console.log(!!undefined)
console.log(!!(ativo = false))


nome = 'Arthur'
console.log(nome || 'Desconhecido')
// verificação de true/false