const pilotos = ['Massa', 'Airton', 'Armstrong', 'Senna']
pilotos.pop() // remove o último elemento
console.log(pilotos)

pilotos.push('Felipe')
console.log(pilotos)

pilotos.shift() // remove o primeiro elemento
console.log(pilotos)

pilotos.unshift('Amiltu') // adiciona no primeiro elemento
console.log(pilotos)


// no índice 2 adiciona o Massa
pilotos.splice(2, 0, 'Massa')
console.log(pilotos)

// no índice 3 deleta o Armstrong
pilotos.splice(3, 1)
console.log(pilotos)


// novo array iniciado a partir do índice 2 do antigo array
const algunsPilotos1 = pilotos.slice(2) 
console.log(algunsPilotos1)

const algunsPilotos2 = pilotos.slice(1, 4)
console.log(algunsPilotos2)



