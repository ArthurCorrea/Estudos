/* 13) Crie um programa que exibe se um dia é dia útil, fim de semana ou dia inválido dado o número referente ao
dia. Considere que domingo é o dia 1 e sábado é o dia 7. Utilize a estrutura Switch. */

const diaDaSemana = (dia) => {
    switch (dia) {
        case 1: 
            console.log(`Domingo é fim de semana.`)
            break;
        case 7:    
            console.log(`Sábado é fim de semana.`)
            break;
        case 2: case 3: case 4: case 5: case 6:
            console.log(`O dia ${dia} é um dia útil.`)
            break;
        default:
            console.log(`Dia inválido.`)
            break;
    }
}

diaDaSemana(1)
diaDaSemana(2)
diaDaSemana(7)
diaDaSemana(15)