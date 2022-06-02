let p = new Promise(function(cumprirPromessa) {
    cumprirPromessa({
        x: 3,
        y: 4,
        lista: ['Arthur', 'Ana', 'Pedro', 'João']
    })
}) 

p.then(valor => {
    console.log(valor.x)
    console.log(valor.y)
})