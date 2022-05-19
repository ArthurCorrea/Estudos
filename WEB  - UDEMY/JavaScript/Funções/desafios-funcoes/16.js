/* 16) Utilizando a estrutura do Switch faça um programa que simule uma calculadora básicaO programa recebe
como parâmetros dois valores numéricos e uma string referente à operação e a realize com os valores
numéricos na ordem que foram inseridos. Por exemplo: calculadora (2, ‘+’, 3). A função efetuará a soma de 2 e
3. Dica: Os sinais das operações são: ‘+’. ‘-’, ‘*’ e ‘/’. Crie um caso default para operações inválidas.*/

function calculadora(valor1 = 0, operacao, valor2 = 0) {
    /* let soma = valor1 + valor2
    let sub = valor1 - valor2
    let multiplicacao = valor1 * valor2
    let divisao = valor1 / valor2 */
    switch(operacao) {
        case '+':
            console.log(`${valor1} + ${valor2} = ${valor1 + valor2}`)
            break;
        case '-':
            console.log(`${valor1} - ${valor2} = ${valor1 - valor2}`)
            break;
        case '*':
            console.log(`${valor1} x ${valor2} = ${valor1 * valor2}`)
            break;
        case '/':
            console.log(`${valor1} / ${valor2} = ${(valor1 / valor2).toFixed(1)}`)
            break;
        default:
            console.log('Inválido.')
            break;
    }
}

calculadora(2, '+', 4)
calculadora(6, '-', 2)
calculadora(8, '*', 5)
calculadora(12, '/', 6)
calculadora(4, '//', 5)

