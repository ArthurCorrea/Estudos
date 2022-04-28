function parimpar(n){
    if (n % 2 == 0) {
        return 'par'
    } else {
        return 'ímpar'
    }
}

console.log(`O número é ${parimpar(3)}.`)
