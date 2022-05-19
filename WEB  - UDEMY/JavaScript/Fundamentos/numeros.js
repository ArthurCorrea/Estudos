const peso01 = 1.0
const peso02 = Number('2.0')
console.log(peso01, peso02)

console.log(Number.isInteger(peso01))   
// isInteger testa se o número é inteiro

const prova01 = 7.5
const prova02 = 9.3

const total = prova01 * peso01 + prova02 * peso02
const media = total / (peso01 + peso02)

console.log(media.toFixed(2))

// toString(2) passa o valor para binário
console.log(media.toString(2))
/* 
    toString(8) = octal
    toString(16) = hexadecimal
    toString(10) = decimal
*/

