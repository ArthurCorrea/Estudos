// converter essa classe para função construtora

/*

class Pessoa {
    constructor(nome) {
        this.nome = nome
    }

    falar() {
        console.log(`Meu nome é ${this.nome}!`)
    }

}

const pessoa01 = new Pessoa('Arthur')
pessoa01.falar() 

*/


function Pessoa(nome) {
    
    this.nome = nome

    this.falar = function() {
        console.log(`Meu nome é ${this.nome}!`)
    }
    
}

const pessoa01 = new Pessoa('Arthur')
pessoa01.falar()