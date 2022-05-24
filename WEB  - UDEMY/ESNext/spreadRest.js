// operador ... rest(juntar) / spread (espalhar)
// usar rest como parâmetro de uma função

// usar spread com objeto
const funcionario = {
    nome: 'Ana',
    salario: 5000
}

const clone = { ativo: true, ...funcionario }
console.log(clone)


// usar spread com array
const grupoA = ['João', 'Lucas', 'Maria']
const grupoFinal = ['Jorge', 'Alice', ...grupoA, 'Rafael']
console.log(grupoFinal)