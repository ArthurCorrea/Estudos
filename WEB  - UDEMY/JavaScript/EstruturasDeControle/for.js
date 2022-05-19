function cons(){
    console.log('--------------')
}


let contador = 1
while(contador <= 10) {
    console.log(`Número: ${contador}`)
    contador++
}

cons()

for(let cont = 1; cont <= 10; cont++) {
    console.log(`Número: ${cont}`)
}

cons()

const notas = [6.3, 1.5, 7.3, 6.2, 9.8, 5.1, 8.3]
for(let i = 0; i < notas.length; i++) {
    console.log(`${i + 1}ª nota: ${notas[i]}`)
}

cons()



const nota = [6.3, 1.5, 7.3, 6.2, 9.8, 5.1, 8.3]
for(let i in nota) {
    console.log(`${i}: ${nota[i]}`)
}

cons()

const pessoa = {
    Nome: 'Arthur',
    Idade: 18,
    Peso: 68,
    Altura: 1.70
}

for(let caracteristica in pessoa) {
    console.log(`${caracteristica} = ${pessoa[caracteristica]}`)
}



// evitar usar isso aqui
num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
externo: for(a in num) {
    for (b in num) {
        if(a == 2 && b == 3) break externo
        console.log(`Par: ${a},${b}`)
    }
}