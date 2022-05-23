// let e const
{
    var a = 2
    var b = 5
    console.log(b) //escopo de bloco
}

console.log(a)

// Destructuring
const [l, e, ...tras] = 'Aviao'
console.log(l, e, tras)