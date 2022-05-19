const alunos = [
    { nome: 'Arthur', nota: 6.7, bolsista: true},
    { nome: 'João', nota: 4.9, bolsista: false},
    { nome: 'Ana', nota: 7.8, bolsista: true},
    { nome: 'Maria', nota: 8.3, bolsista: false},
    { nome: 'Carlos', nota: 7.5, bolsista: true}
]

// Todos os alunos são bolsistas?
const bolsistas = (resultado, bolsista) => resultado && bolsista
console.log(alunos.map(a => a.bolsista).reduce(bolsistas))

// Algum aluno é bolsista?
const algumBolsista = (resultado, bolsista) => resultado || bolsista
console.log(alunos.map(a => a.bolsista).reduce(algumBolsista))
