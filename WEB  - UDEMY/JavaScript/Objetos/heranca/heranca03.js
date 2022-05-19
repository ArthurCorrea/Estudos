const pai = {
    nome: 'Arthur',
    corCabelo: 'Preto'
}

const filho1 = Object.create(pai)
filho1.nome = 'Ana'
console.log(filho1.corCabelo)

const filho2 = Object.create(pai, {
    nome: {
        value: 'Carlos',
        writable: false,
        enumerable: true
    }
})

console.log(filho2.nome)
console.log(`${filho2.nome} tem cabelo ${filho2.corCabelo}`)


for(let key in filho2) {
    filho2.hasOwnProperty() ?
        console.log(key) : console.log(`Por herança: ${key}`)
}
