/* 33) Crie três vetores, chamados vetorInteiro, vetorString e vetorDouble. Cada um destes vetores deverá conter
quatro valores, sendo o primeiro com valores inteiros, o segundo com strings e o terceiro com valores decimais.
Declarados os vetores, utilize a função de união concat() de duas maneiras diferentes para unir os vetores, e
mostre o resultado no console. Todos os elementos do vetor resultado deverão aparecer no console.
*/

let vetorInteiro = [5, 2, 7, 9]
let vetorString = ['Arthur', 'Pedro', 'Lucas', 'João']
let vetorDouble = [7.4, 5.5, 2.9, 0.3]

let juncao = vetorInteiro.concat(vetorDouble).concat(vetorString)
console.log(juncao)

console.log('---------------------')

let array2 = []
let juncao2 = array2.concat(vetorInteiro, vetorDouble, vetorString)
console.log(juncao2)