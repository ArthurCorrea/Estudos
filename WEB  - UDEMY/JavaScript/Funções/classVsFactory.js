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



const criarPessoa = nome => {
    return {
        falar: () => console.log(`Meu nome é ${nome}!`)
    }
}

const pessoa02 = criarPessoa('Pedro')
pessoa02.falar()