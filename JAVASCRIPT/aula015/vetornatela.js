var numeros = [5, 2, 6, 1, 7, 8, 3]

/*for (let posição = 0; posição < numeros.length; posição++) {
    console.log(`A posição ${posição} tem o valor ${numeros[posição]}`)
    
} 
console.log(`Em ordem crescente fica ${}`)
*/
numeros.sort()
for (var posição in numeros) {
    console.log(`A posição ${posição} tem o valor ${numeros[posição]}`)
}
