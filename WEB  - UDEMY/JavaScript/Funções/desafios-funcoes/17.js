/* 17) Um funcionário irá receber um aumento de acordo com o seu plano de
trabalho, de acordo com a tabela abaixo:
Plano Aumento
 A      10%
 B      15%
 C      20%
Faça uma função que leia o plano de trabalho e o salário atual de um funcionário e calcula e imprime o seu
novo salário. Use a estrutura switch e faça um caso default que indique que o plano é inválido.
*/

const trabalhador = (plano, salario) => {

    aumento10 = salario + (salario * 10) / 100
    aumento15 = salario + (salario * 15) / 100
    aumento20 = salario + (salario * 20) / 100

    switch(plano) {
        case 'A': case 'a':
            console.log(`Com 10% de aumento, seu novo salário é R$${aumento10.toFixed(2).replace('.', ',')}`)

            break;
        case 'B': case 'b':
            console.log(`Com 15% de aumento, seu novo salário é R$${aumento15.toFixed(2).replace('.', ',')}`)

            break;
        case 'C': case 'c':
            console.log(`Com 20% de aumento, seu novo salário é R$${aumento20.toFixed(2).replace('.', ',')}`)

            break;
        default:
            console.log(`INVÁLIDO.`)
    }
}
trabalhador('a', 1000)
trabalhador('c', 6000)
trabalhador('b', 3200)
trabalhador('d', 9000)