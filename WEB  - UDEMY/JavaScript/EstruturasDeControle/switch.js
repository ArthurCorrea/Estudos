const mostrarResultado = function(nota) {
    switch(Math.floor(nota)) {
        case 10: case 9:
            console.log(`Nota ${nota}! Excelente!`)
            break
        case 8: case 7: case 6:
            console.log(`Aprovado!`)
            break
        case 5: case 4:
            console.log(`Recuperação`)
            break
        case 3: case 2: case 1: case 0:
            console.log(`Reprovado!`)
            break
        default:
            console.log('Nota inválida.')
    }
}

mostrarResultado(9.1)
mostrarResultado(7.2)
mostrarResultado(5.2)
mostrarResultado(2)
mostrarResultado(-56)