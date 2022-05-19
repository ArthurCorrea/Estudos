function compras(job1, job2){
    const tomarSorvete = job1 || job2
    const comprarTV50 = job1 && job2
    const comprarTV32 = job1 != job2
    const ficarEmCasa = !tomarSorvete   // operador unário
    
    return { tomarSorvete, comprarTV50, comprarTV32, ficarEmCasa }
}

console.log(compras(true, true))
console.log(compras(true, false))
console.log(compras(false, true))
console.log(compras(false, false))