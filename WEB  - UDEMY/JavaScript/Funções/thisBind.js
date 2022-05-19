const pessoa = {
    saudacao: 'Bom dia!',
    falar() {
        console.log(this.saudacao)
    }
}

pessoa.falar()

const falar = pessoa.falar
falar() // problema


// o bind "prende" o this dentro da função
const conversar = pessoa.falar.bind(pessoa)
conversar()  


function Pessoa() {
    this.idade = 0

    setInterval(function() {
        this.idade++
        console.log(`Idade: ${this.idade}`)
    }.bind(this), 1000) // 1000 = 1s
}

new Pessoa