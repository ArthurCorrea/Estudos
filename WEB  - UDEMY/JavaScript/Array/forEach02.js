function forEach2() {
    for(let i = 0; i < aprovados.length; i++) {
        console.log(`${i + 1}°: ${aprovados[i]}`)
    }
}

const aprovados = ['João', 'Aldo', 'Raquel', 'Arthur']

forEach2()

console.log('---------------') 


// cria um novo método para usar em arrays
Array.prototype.forEach3 = function(callback) {
    for(let i = 0; i < this.length; i++) {
        callback(this[i], i, this)
    }
}

aprovados.forEach3(function(nome, indice){
    console.log(`${indice + 1}°: ${nome}`)
})