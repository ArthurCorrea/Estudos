// Cadeia de protótipos (protype chain)
const avo = {
    atributo1: 'A'
}

const pai = {
    __proto__: avo,
    atributo2: 'B'
}

const filho = {
    __proto__: pai, 
    atributo3: 'C'
}

console.log(filho.atributo1)


const carro = {
    velAtual: 0,
    velMax: 200,

    acelerar(delta) {
        if(this.velAtual + delta <= this.velMax) {
            this.velAtual += delta
        } else {
            this.velAtual = this.velMax
        }
    },

    status() {
        return `${this.velAtual}Km/h de ${this.velMax}Km/h`
    }
}


const ferrari = {
    modelo: 'V50',
    velMax: 325 //shadowing
}

const bugatti = {
    modelo: 'Veyron',
    status() {
        return `${this.modelo}: ${super.status()}`
    }
}

Object.setPrototypeOf(ferrari, carro)
Object.setPrototypeOf(bugatti, carro)

console.log(ferrari)

bugatti.acelerar(35)
console.log(bugatti.status())

ferrari.acelerar(60)
console.log(ferrari.status())