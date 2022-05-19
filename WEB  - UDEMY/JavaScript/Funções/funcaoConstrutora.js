function Carro(velocidadeMaxima = 250, delta = 10) {
    // atributo privado
    let velocidadeAtual = 0

    // método público
    this.acelerar = function() {
        if(velocidadeAtual + delta <= velocidadeMaxima) {
            velocidadeAtual += delta
        } else {
            velocidadeAtual = velocidadeMaxima
        }
    }

    // método público
    this.getVelocidadeAtual = function() {
        return velocidadeAtual
    }
}

const gol = new Carro
gol.acelerar()
gol.acelerar()
gol.acelerar()
gol.acelerar()
gol.acelerar()
gol.acelerar()
gol.acelerar()
gol.acelerar()
console.log(gol.getVelocidadeAtual())


const outroCarro = new Carro(400, 60)
for(let i = 1; i < 400; i++){
    outroCarro.acelerar()
}

console.log(outroCarro.getVelocidadeAtual())