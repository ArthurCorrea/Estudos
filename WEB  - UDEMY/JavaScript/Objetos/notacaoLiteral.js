const a = 1
const b = 2

const obj1 = { a: a, b: b}
const obj2 = { a, b}
console.log(obj1, obj2)

const nomeAtributo = 'Nota'
const valorAtributo = 6.5

const obj3 = {}
obj3[nomeAtributo] = valorAtributo
console.log(obj3)


const obj4 = {[nomeAtributo]: valorAtributo}
console.log(obj4)


const obj5 = {

    funcao1: function() {
        // ...
    },

    funcao2() {      // forma nova

    }
}

console.log(obj5)
