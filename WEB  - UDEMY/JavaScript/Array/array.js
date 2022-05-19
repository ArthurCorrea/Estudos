let aprovados = ['Arthur', 'Carlos', 'Ana']
console.log(aprovados[1])


aprovados[3] = 'João'
aprovados.push('Pedro')
console.log(aprovados)
console.log(aprovados.length)


aprovados[7] = 'Rafael'
console.log(aprovados)


// ordena em ordem alfabética
aprovados.sort()
console.log(aprovados)


delete aprovados[2]
console.log(aprovados)


aprovados = ['Pedro', 'Arthur', 'Sônia']
aprovados.splice(0, 1, 'Ana', 'Olivia')
console.log(aprovados)
