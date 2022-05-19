function Aula(nome, id) {
    this.nome = nome
    this.id = id
}


const aula1 = new Aula('Aula 1', 1)
const aula2 = new Aula('Aula 2', 2)
console.log(aula1, aula2)


// simulando o new
function novo(f, ...params) {
    const obj = {}
    obj.__proto__ = f.prototype
    f.apply(obj, params)
    return obj
}

const aula3 = novo(Aula, 'Aula 3', 3)
const aula4 = novo(Aula, 'Aula 4', 4)
console.log(aula3, aula4)