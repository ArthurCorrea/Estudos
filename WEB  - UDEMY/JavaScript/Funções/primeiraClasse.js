// criar de forma literal
function exemplo01() {
    
}



// armazenar em variável
const exemplo02 = function() {
  
}



// armazenar em um array
const array = [function (a, b) {
    return a + b
}, exemplo01, exemplo02]
console.log(array[0](5, 3))



// armazenar em um atributo de objeto
const objeto = {}
objeto.falar = function() { 
    return 'Salve!' 
}
console.log(objeto.falar())



// passar uma função como parâmetro
function correr(run) {
    run()
}

correr(function () {
    console.log('Correndo...')
})



// uma função pode retornar/conter uma função
function soma(a, b) {
    return function(c) {
        console.log(a + b + c)
    }
}

soma(7, 3)(6) //chamando as funções fica assim
const somaTotal = soma(7,3)
somaTotal(6) // pode chamar assim também




