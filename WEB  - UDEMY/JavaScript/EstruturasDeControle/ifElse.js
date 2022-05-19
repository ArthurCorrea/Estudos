function boaNoticia(nota){
    if(nota >= 7) {
        console.log(`Parabéns! Você foi aprovado com nota ${nota}!`)
    }
    console.log('-------------')
}

boaNoticia(5)
boaNoticia(8.5)



Number.prototype.entre = function(inicio, fim) {
    return this >= inicio && this <= fim
}

const mostrarResultado = function (nota) {
    if(nota.entre(9, 10)){
        console.log('Nota excelente! Parabéns!')
    } else if(nota.entre(7, 8.99)){
        console.log(`Aprovado com nota ${nota}!`)
    } else if(nota.entre(4, 6.99)){
        console.log(`Recuperação com nota ${nota}!`)
    } else if(nota.entre(0, 3.99)){
        console.log(`Reprovado com nota ${nota}!`)
    } else {
        console.log('Nota inválida!')
    }
    console.log('Final da verificação.')
    console.log('-------------')
}

mostrarResultado(7)
mostrarResultado(0)