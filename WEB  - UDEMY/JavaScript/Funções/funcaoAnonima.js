const soma = function(x, y) {
    return x + y
}

const mostrarResultado = function (a, b, operacao = soma) {
    console.log(operacao(a, b))
}

mostrarResultado(6, 2)
mostrarResultado(4, 7, soma)
mostrarResultado(9, 3, function (x, y){
    return x - y
})
mostrarResultado(4, 5, (x, y) => x * y)


const pessoa = {
    falar: function() {
        console.log('Salve!')
    }
}
pessoa.falar()