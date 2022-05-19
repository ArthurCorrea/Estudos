/* 06) Elabore duas funções que recebem três parâmetros: capital inicial, taxa de juros e tempo de aplicação. A
primeira função retornará o montante da aplicação financeira sob o regime de juros simples e a segunda
retornará o valor da aplicação sob o regime de juros compostos.
*/

function jurosSimples(capitalInicial, taxa, tempo) {
    let montante = capitalInicial + (capitalInicial * taxa * tempo) / 100

    return `Montante: R$${montante.toFixed(2).replace('.', ',')}`
}

// medido em meses. EX: 1% a.m | 6% a.m
console.log(jurosSimples(1000, 1, 12))
console.log(jurosSimples(5000, 6, 24))



function jurosCompostos(capitalInicial, taxa, tempo) {

    let montante = capitalInicial * (1 + (taxa/100))**tempo

    return `Montante: R$${montante.toFixed(2).replace('.', ',')}`

}

// medido em anos. EX: 7% a.a || 24% a.a 
console.log(jurosCompostos(1400, 7, 2))
console.log(jurosCompostos(1000, 24, 3))