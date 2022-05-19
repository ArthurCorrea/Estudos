/* 23) Escreva um algoritmo que leia o código de um aluno e suas três notas. Calcule a média ponderada do
aluno, considerando que o peso para a maior nota seja 4 e para as duas restantes, 3. Mostre o código do aluno, suas três notas, a média calculada e uma mensagem "APROVADO" se a média for maior ou igual a 5 e "REPROVADO" se a média for menor que 5. Repita a operação até que o código lido seja negativo. */


function aluno(codigo = 0, nota1, nota2, nota3) {
    
    //while(codigo >= 0) {

        let media = (nota1 + nota2 + nota3) / 3
    
        //ArrayMaiorNota = [nota1, nota2, nota3]
        //Array.max = (ArrayMaiorNota) => Math.max.apply(Math, ArrayMaiorNota)
    
        //maiorNota = Array.max(ArrayMaiorNota)
    
        //notaPeso4 = maiorNota * 4
        
        if(media >= 5) {
            console.log(`APROVADO!`) 
        } else {
            console.log(`REPROVADO!`)
        }
        console.log(`Código: ${codigo}\nNotas: ${nota1}, ${nota2}, ${nota3}\nMédia: ${media}`)
        
    //}
}

aluno(0, 9, 6, 3)