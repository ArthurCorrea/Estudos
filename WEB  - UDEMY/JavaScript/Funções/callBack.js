const fabricantes = ['Volks', 'BMW', 'Audi', 'Ford']

function imprimir(nome, i) {
    console.log(`${i + 1}° - ${nome}`)
}

fabricantes.forEach(imprimir)
fabricantes.forEach(fabricante => console.log(fabricante))




notas = [4.2, 5, 8.2, 2.1, 9.5, 5.4, 6.1, 7.3, 3.7]

// Sem callback
const notasBaixas = []
for(let i in notas) {
    if(notas[i] < 7) {
        notasBaixas.push(notas[i])
    }
}

console.log(notasBaixas)



// Com callback
const notasBaixas2 = notas.filter(function(nota){
    return nota < 7
})

console.log(notasBaixas2)



// Com callback e arrow function
const notasBaixas3 = notas.filter(nota => nota < 7)

console.log(notasBaixas3)