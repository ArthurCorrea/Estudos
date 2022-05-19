/* 03) Crie uma função que recebe dois parâmetros, base e expoente, e retorne a base elevada ao expoente. */

const exponenciacao = (base, expoente) => {
    return `${base} elevado a ${expoente} = ${base ** expoente}`
}

console.log(exponenciacao(2, 2))
console.log(exponenciacao(7, 4))
console.log(exponenciacao(87, 6))
