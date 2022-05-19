// adicionado no ES2015

const pessoa = {
    nome: 'Arthur',
    idade: 18,
    endereco: {
        rua: 'Nacib',
        numero: 2 
    }
}

// vai tirar o nome e idade do objeto pessoa
const { nome, idade } = pessoa 
console.log(nome, idade)

// dando outro nome pra variável
const { nome: n, idade: i } = pessoa
console.log(n, i)


const { endereco: {rua, numero, cep} } = pessoa
console.log(rua, numero, cep)




// com funções
function random( { min = 0, max = 500 } ) {
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

// o obj vai passar a ter um valor aleatório entre esses que foram passados como parâmetros
const obj = {max: 100, min: 30}
console.log(random(obj))

// pode-se definir um mínimo também
console.log(random( {min: 100} ))

// deixando entre 0 e 500
console.log(random( {} ))



