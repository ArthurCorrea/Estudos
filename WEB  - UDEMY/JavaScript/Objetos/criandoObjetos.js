// usando a forma literal
const objeto1 = {
    nome: 'Teste de objeto'
}

console.log(objeto1.nome)


// Object em JS
const objeto2 = new Object
console.log(objeto2)


// Funções construtoras
function Produto(nome, preco, desconto) {
    this.nome = nome   //nome será visível fora da função
    this.getPrecoComDesconto = () => {
        return preco * (1 - desconto)
    }
}

const produto1 = new Produto('Notebook', 2499, 0.2)
const produto2 = new Produto('Carro', 29999, 0.25)

console.log(produto1.getPrecoComDesconto(), produto2.getPrecoComDesconto())


// Função Factory (padrão de projeto)
function criarFuncionario(nome, salarioBase, faltas) {
    return {
        nome, 
        salarioBase,
        faltas,
        getSalario() {
            return (salarioBase / 30) * (30 - faltas)
        }
    }
}

const funcionario1 = criarFuncionario('João', 1200, 5)
const funcionario2 = criarFuncionario('Ana', 4500, 12)

console.log(funcionario1.getSalario(), funcionario2.getSalario())


// Object.create
const filho = Object.create(null)
filho.nome = 'Arthur'
console.log(filho)


// Com JSON
const fromJson = JSON.parse('{"info": "JSON aqui!"}')
console.log(fromJson.info)
