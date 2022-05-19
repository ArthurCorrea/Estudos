/* 37) Escreva duas funções, uma para progressão aritmética e uma para progressão geométrica que recebam
como parâmetros um número n (número de termos), a1 (o primeiro termo) e r (a razão) e escreva os n termos,
bem como a soma dos elementos */

const aritmetica = (n, a1, r) => {
    
    let an = a1 + (n - 1) * r
    let soma = ((a1 + an) / 2) * n 

    let termos = [a1]
    
    for(let i = a1; i < n; i++){
        a1 += r
        termos.push(a1)
    }
    
    console.log(`Termos: ${termos}`)
    console.log(`Soma dos termos: ${soma}`)
    
    console.log('----------------')

}

const geometrica = (n, a1, r) => {
    let soma = a1 * (r**n - 1) / (r - 1)

    let termos = []

    for(let i = a1; i <= n; i++) {
        a1 *= r
        termos.push(a1)
    }
    
    let ultimoTermo = termos.splice(-1) * r
    termos.push(ultimoTermo)

    console.log(`Termos: ${termos}`)
    console.log(`Soma dos termos: ${soma}`)

    console.log('----------------')

}

aritmetica(8, 6, 3)
geometrica(4, 3, 6)
geometrica(7, 9, 4)