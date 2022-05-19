function gerarInteiro(min, max) {
    const valor = Math.random() * (max - min) + min
    return Math.floor(valor)
}

let opcao = 0
while(opcao != -1){
    opcao = gerarInteiro(-1, 10)
    console.log(`Opção escolhida: ${opcao}`)
}

console.log('Fim do programa.')