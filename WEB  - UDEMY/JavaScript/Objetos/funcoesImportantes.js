const pessoa = {
    nome: 'Arthur',
    idade: 18,
    peso: 68
}


console.log(Object.keys(pessoa))        // pega as chaves


console.log(Object.values(pessoa))      // pega os valores


console.log(Object.entries(pessoa))     // pega valores e chaves


Object.entries(pessoa).forEach(([chave, valor]) => {
    console.log(`${chave}: ${valor}`)

})


Object.defineProperty(pessoa, 'nascimento', {
    enumerable: true,
    writable: false,
    value: '21/12/2003'
})

console.log(pessoa.nascimento)
console.log(Object.keys(pessoa))



