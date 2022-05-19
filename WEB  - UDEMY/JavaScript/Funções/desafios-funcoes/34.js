/* 34) Construa uma função que receberá duas Strings de tamanhos variados e que retornará True ou False caso
todos os caracteres (independentemente de ser maiúsculo ou minúsculo) estejam contidos em ambas palavras */

function analisarStrings(string01 = '', string02 = '') {

    let contido = true
    
    for(let i = 0; i < string01.length; i++) {
        let caractereString01 = string01.charAt(i).toLocaleUpperCase()
        for(let ind = 0; ind < string02.length; ind++) {
            let caractereString02 = string02.charAt(ind).toLocaleUpperCase()
            if(caractereString01 == caractereString02){
                contido = true
                break
            } else {
                contido = false
            }
        }

        if(!contido) {
            return contido
        }
    }

    return contido

}

console.log(analisarStrings('abc', 'bca'))
console.log(analisarStrings('dfs4', 'grs1'))