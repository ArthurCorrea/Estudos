// 01) Crie uma função que dado dois valores, passados como parâmetros, mostre no console a soma, subtração, multiplicação e divisão desses valores.

const valores = (valor1 = 0, valor2 = 0) => {
    return {
        Soma: valor1 + valor2,
        Subtracao: valor1 - valor2,
        Multiplicacao: valor1 * valor2,
        Divisao: valor1 / valor2
    }
}

console.log(valores(1, 4))
console.log(valores(7, 2))
console.log(valores(5423, 531))