function p() {
    console.log('--------------')
}

const aprovados = ['Arthur', 'Ana', 'Pedro', 'João']

aprovados.forEach(function(nome, indice) {
    console.log(`${indice + 1}°: ${nome}`)
})

p()
aprovados.forEach(nome => console.log(nome))
p()

const exibirAprovados = aprovado => console.log(aprovado)
aprovados.forEach(exibirAprovados)

