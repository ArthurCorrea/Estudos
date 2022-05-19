for (var i = 0; i < 10; i++) {
    console.log(i)   
}

for (let i = 0; i < 10; i++) {
    console.log(i)
}

console.log(`i = ${i}`)



// testando escopo
const func = []
for (var a = 0; a < 10; a++ ) {
    func.push(function(){
        console.log(a)
    })
}

func[5]()


const funct = []
for (let a = 0; a < 10; a++) {
    funct.push(function(){
        console.log(a)
    })
}

funct[2]()
