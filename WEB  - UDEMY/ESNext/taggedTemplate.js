// tagged template = processo o template string dentro de uma função

function tag(partes, ...valores) {
    console.log(partes)
    console.log(valores)
    return 'Outra string'
}

const aluno = 'Arthur'
const situacao = 'Aprovado'
console.log(tag `O aluno ${aluno} está ${situacao}.`)


// tagged template 02
function real(partes, ...valores) {
    const resultado = []
    valores.forEach((valor, indice) => {
        valor = isNaN(valor) ? valor : `R$${valor.toFixed(2)}`
        resultado.push(partes[indice], valor)
    })
    return resultado.join('')
}

const preco = 40
const precoParcela = 10
console.log(real `1x de ${preco} ou 4x de ${precoParcela}.`)