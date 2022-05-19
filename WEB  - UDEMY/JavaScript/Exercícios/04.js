// Crie uma função que receba dois números e retorne se o primeiro é maior ou igual ao segundo.

const maiorOuIgual = (num1, num2) => {
    if(num1 > num2 || num1 === num2) {
        return true
    } else {
        return false
    }
}

console.log(maiorOuIgual(0, 0))
console.log(maiorOuIgual(0, "0"))
console.log(maiorOuIgual(5, 1))