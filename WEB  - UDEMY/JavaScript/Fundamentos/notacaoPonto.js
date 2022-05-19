const obj1 = {}
obj1.nome = 'Arthur'

console.log(obj1.nome)

function Obj(nome){
    this.nome = nome    // torna 'nome' público
    this.executar = function() {
        console.log('Executado!')
    }
}

const obj2 = new Obj('Pedro')
console.log(obj2.nome)

const obj3 = new Obj('Mateus')
console.log(obj3.nome)  // obj3 fica "igual" a Obj
obj3.executar()