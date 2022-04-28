function fatorial(n){
    let fato = 1
    for (let cont = n; cont > 1; cont--){
        fato *= cont
    }
    return fato
}

console.log(fatorial(5))