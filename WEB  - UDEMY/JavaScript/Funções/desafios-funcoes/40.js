/* 40) Faça uma função que receba como parâmetro um vetor de notas e mostre os conceitos de cada uma de
modo que de 0,0 a 4,9 seja atribuído o conceito D, de 5,0 a 6,9 seja atribuído o conceito C, de 7,0 a 8,9 o
conceito B e de 9,0 a 10,0 o conceito A. */

function p() {
    console.log('-----------------')
}

function analisarNotas(notas = []) {
    let conceitoA = []
    let conceitoB = []
    let conceitoC = []
    let conceitoD = []

    notas.forEach(valorAtual => {
        if(valorAtual >= 0 && valorAtual <= 4.9){
            conceitoD.push(valorAtual)
        } else if(valorAtual >= 5 && valorAtual <= 6.9) {
            conceitoC.push(valorAtual)
        } else if(valorAtual >= 7 && valorAtual <= 8.9) {
            conceitoB.push(valorAtual)
        } else if(valorAtual >= 9 && valorAtual <= 10.0) {
            conceitoA.push(valorAtual)
        }
    });

    conceitoD.forEach(nota => {
        console.log(`Nota D: ${nota}`)
    })
    p()
    conceitoC.forEach(nota => {
        console.log(`Nota C: ${nota}`)
    })
    p()
    conceitoB.forEach(nota => {
        console.log(`Nota B: ${nota}`)
    })
    p()
    conceitoA.forEach(nota => {
        console.log(`Nota A: ${nota}`)
    })



}

analisarNotas([1, 6, 5, 9, 2, 0.5, 8])