const sequencia = {
    _valor: 1,   // _ para a variável ser usada dentro do objeto

    get valor() { 
        return this._valor++ 
    },

    set valor(valor) {
        if(valor > this._valor) {
            this._valor = valor
        }
    }
}

console.log(sequencia.valor, sequencia.valor)


sequencia.valor = 100
console.log(sequencia.valor, sequencia.valor)

sequencia.valor = 90  // vai ser ignorado pois o valor é menor
console.log(sequencia.valor, sequencia.valor)