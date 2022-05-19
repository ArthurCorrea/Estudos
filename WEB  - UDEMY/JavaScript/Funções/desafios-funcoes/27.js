/* 27) Construa uma função que receba como parâmetros as alturas e as taxas de crescimento anuais de duas
crianças e calcule se existe uma criança menor, caso exista se a criança menor ultrapassará a maior e em
quantos anos isso acontecerá. Utilize centímetros para as unidades de medida.
*/

const alturasCriancas = (alturaCrianca1, taxa1, alturaCrianca2, taxa2) => {

    this.anos = 0

    // descobrir a menor altura
    let menorAltura = 1000
    if(alturaCrianca1 < menorAltura) {
        menorAltura = alturaCrianca1
    }
    if(alturaCrianca2 < menorAltura) {
        menorAltura = alturaCrianca2
    }

    // verificar se as alturas são iguais
    if(alturaCrianca1 == alturaCrianca2){

        if(taxa1 > taxa2){
            console.log(`A primeira criança será mais alta.`)
        } else {
            console.log(`A segunda criança será mais alta.`)
        }

    // verificar qual criança ficará mais alta
    } else {

        if(menorAltura == alturaCrianca1 && taxa1 < taxa2) {
            console.log(`A segunda criança será a mais alta.`)
        } 

        else if(menorAltura == alturaCrianca1 && taxa1 > taxa2){
            
            for(let cont = 0; alturaCrianca1 < alturaCrianca2; cont++) {
                    alturaCrianca1 += taxa1
                    this.anos++
            }

            console.log(`A primeira criança será a maior daqui ${this.anos} ano(s).`)
            
        }   

        if(menorAltura == alturaCrianca2 && taxa2 < taxa1) {
            console.log(`A primeira criança será a mais alta.`)
        }

        else if(menorAltura == alturaCrianca2 && taxa2 > taxa1){

            for(let cont = 0; alturaCrianca2 < alturaCrianca1; cont++) {
                alturaCrianca2 += taxa2
                this.anos++
            }

            console.log(`A segunda criança será a maior daqui ${this.anos} ano(s).`)

        }
    }
}

alturasCriancas(200, 1, 140, 3)