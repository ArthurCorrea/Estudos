
function esperarPor(tempo = 2000) {
    return new Promise(resolve => {
        setTimeout(function() {
            console.log('Executando promise')
            resolve()
        }, tempo)
    })
}

/*
esperarPor()
    .then(esperarPor)
    .then(esperarPor)
*/
    
function retornarValor() {
    return new Promise(resolve => {
        setTimeout(() => resolve(10), 3000)
    }) 
}

async function executar() {
    let valor = await retornarValor()

    await esperarPor(1000)
    console.log(`Async/Await ${valor}`)

    esperarPor(1000)
    console.log('Async/Await 2')

    esperarPor(1000)
    console.log('Async/Await 3')
}   

executar()