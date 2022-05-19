const pessoa = {
    nome: 'Arthur'
}
pessoa.nome = 'Lucas'   // pode alterar um atributo do objeto
console.log(pessoa)

Object.freeze(pessoa)   // não deixa mais mexer no objeto

pessoa.nome = 'Ana'
console.log(pessoa.nome)
