// função sem retorno
function mostrarSoma(x, y) {
    console.log(x + y)
}

mostrarSoma(5, 8)


// função com retorno
function outraSoma(a, b = 1) {
    return a + b
}

console.log(outraSoma(7, 3))
console.log(outraSoma(5))