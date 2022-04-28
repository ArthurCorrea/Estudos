var idade = 87
if (idade < 16){
    console.log('Não vota.')
} else if (idade < 18 || idade > 65){
    console.log('Voto opcional.')
} else {
        console.log('Vota.')
    }

var horaatual = new Date()
var hora = horaatual.getHours()
console.log(`Agora são ${hora} horas.`)
if (hora > 5 && hora <= 12) {
    console.log('Bom dia!')
} else if(hora > 12 && hora < 18) {
    console.log('Boa tarde!')
} else if (hora >= 0 && hora < 5){
    console.log('Boa madrugada!')
} else  {
    console.log('Boa noite!')
}