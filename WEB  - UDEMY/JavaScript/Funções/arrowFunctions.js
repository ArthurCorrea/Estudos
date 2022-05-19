let dobro = function(a) {
    return 2 * a
}

dobro = (a) => {
    return 2 * a
}


// para funções com um único trabalho e return implícito
dobro = a => 2 * a 
console.log(dobro(Math.PI.toFixed(2)))



let ola = function() {
    return 'Olá'
}

ola = () => {
    return 'Olá'
}

// parâmetro vazio
ola = _ => {        
    return 'Olá'
}

console.log(ola())



// mesmo exemplo do thisBind com arrow function
function Pessoa() {
    this.idade = 0

    setInterval(() => {
        this.idade++
        console.log(this.idade)
    }, 1000)    // com arrow function o this é fixo
}

new Pessoa






