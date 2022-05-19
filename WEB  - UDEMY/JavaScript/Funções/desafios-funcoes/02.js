/* 02)
Os triângulos podem ser classificados em 3 tipos quanto ao tamanho de seus lados:
- Equilátero: Os três lados são iguais. 
- Isósceles: Dois lados iguais. 
- Escaleno: Todos os lados são diferentes.
Crie uma função que recebe os comprimentos dos três lados de um triângulo e retorne sua classificação quanto
ao tamanho de seus lados. (Neste exemplo deve-se abstrair as condições matemáticas de existência de um
triângulo). 
*/

const triangulo = (lado1 = 0, lado2 = 0, lado3 = 0) => {
    if(lado1 == lado2 && lado1 == lado3 && lado2 == lado3) {
        return `Esse triângulo é equilátero.`
    } else if(lado1 == lado2 || lado1 == lado3 || lado2 == lado3) {
        return `Esse triângulo é isósceles.`
    } else {
        return `Esse triângulo é escaleno.`
    }
}

console.log(triangulo(4, 2, 1))
console.log(triangulo(2, 4, 1))
console.log(triangulo(1, 2, 4))
console.log(triangulo(5, 5, 7))
console.log(triangulo(5, 7, 5))
console.log(triangulo(7, 5, 5))
console.log(triangulo(4, 4, 4))
console.log(triangulo())