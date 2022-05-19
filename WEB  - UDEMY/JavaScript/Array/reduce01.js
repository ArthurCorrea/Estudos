const alunos = [
    { nome: 'Arthur', nota: 6.7, bolsista: true},
    { nome: 'João', nota: 4.9, bolsista: false},
    { nome: 'Ana', nota: 7.8, bolsista: true},
    { nome: 'Maria', nota: 8.3, bolsista: false},
    { nome: 'Carlos', nota: 7.5, bolsista: true}
]

const resultado = alunos.map(a => a.nota).reduce(function(acumulador, atual) {
    console.log(acumulador, atual)
    return acumulador + atual
})

console.log(resultado)