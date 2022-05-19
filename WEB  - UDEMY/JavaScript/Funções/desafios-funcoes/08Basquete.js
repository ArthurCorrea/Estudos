/* 08) Pedro joga N jogos de basquete por temporada. Para saber como está ele está progredindo, ele mantém
registro de todos os as pontuações feitas por jogo. Após cada jogo ele anota no novo valor e confere se o
mesmo é maior ou menor que seu melhor e pior desempenho. Dada uma lista string = “pontuação1 pontuação2
pontuação3 etc..”, escreva uma função que ao recebê-la irá comparar os valores um a um e irá retornar um
vetor com o número de vezes que ele bateu seu recorde de maior número de pontos e quando fez seu pior
jogo. (Número do pior jogo).
Obs.: O primeiro jogo não conta como novo recorde do melhor.
Exemplo:
String: “10 20 20 8 25 3 0 30 1”
Retorno: [3, 7] (Significa que ele bateu três vezes seu recorde de melhor pontuação e a pior pontuação
aconteceu no sétimo jogo.)
 */

const pontos = () => {
    console.log('------------------------------------')
}


function jogosBasquete(pontuacao = [10, 20, 20, 8, 25, 3, 0, 30, 1]) {

    let novoRecorde = 0
    let menorPontuacao = pontuacao
    let maiorPontuacao = pontuacao[0]

    Array.min = function(menorPontuacao) {
        return Math.min.apply(Math, menorPontuacao)
    }

    Array.max = function(maiorPontuacao) {
        return Math.max.apply(Math, maiorPontuacao)
    }

    for(let i= 1; i < pontuacao.length; i++) {
        if(pontuacao[i] > maiorPontuacao) {
            maiorPontuacao = pontuacao[i]
            novoRecorde++
        }  
    }

    
    menor = Array.min(menorPontuacao)

    return `Recorde: ${novoRecorde} \nMenor pontuação: ${menor} \nPior jogo: ${menorPontuacao.indexOf(menor) + 1}`
    
    

}


console.log(jogosBasquete())
pontos()
console.log(jogosBasquete([0, 5, 8, 1, 3, 5, 8, 9, 10]))
pontos()
console.log(jogosBasquete([7, 3, 5, 2, 5, 1, 6, 7, 3, 12, 17, 5, 2, 8, 9, 11, 13]))
