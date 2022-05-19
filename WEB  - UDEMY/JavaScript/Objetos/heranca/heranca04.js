function MeuObjeto() {}

const obj1 = new MeuObjeto
const obj2 = new MeuObjeto

console.log(obj1.__proto__ === obj2.__proto__)
console.log(MeuObjeto.prototype === obj1.__proto__)

MeuObjeto.prototype.nome = 'Arthur'
MeuObjeto.prototype.falar = function() {
    console.log(`Salve! Meu nome é ${this.nome}!`)
}

obj1.falar()

obj2.nome = 'Pedro'
obj2.falar()

const obj3 = {}
obj3.__proto__ = MeuObjeto.prototype
obj3.nome = 'Ana'
obj3.falar()