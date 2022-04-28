//Praticando com arrays

let numeros = [2, 0.3, 5, 1, 9]
numeros[5] = 88
numeros[6] = 34
numeros.push(32) //Coloca o número na última posição do array
numeros.sort() //Coloca o array em ordem crescente

console.log(`O vetor é ${numeros}`)
console.log(`O primeiro valor é ${numeros[0]}`)

console.log(numeros.length) //Mostra o tamanho do array

var posição = numeros.indexOf(5)
if (posição == -1) {
    console.log(`O valor não foi encontrado.`)
} else {
    console.log(`O valor 5 está na posição ${posição}`)
}

var ar = [2, 7, 1]
soma = 0
for (var i = 0; i < ar.length; i ++){
    soma += ar[i]
}
console.log(soma)

