function verificar(){

    var data = new Date()
    var ano = data.getFullYear()

    var formularioAno = document.getElementById('txtAno')
    var resultado = document.querySelector('div#resultado')

    if (formularioAno.value.length == 0 || Number(formularioAno.value) > ano) {
        alert('VERIFIQUE OS DADOS E TENTE NOVAMENTE')
    } else {
        var formularioSexo = document.querySelectorAll("input[type='radio']")
        var idade = ano - Number(formularioAno.value)
        var gênero = ''

        var img = document.createElement('img')
        img.setAttribute('id', 'foto')

        if (formularioSexo[0].checked) {
            gênero = 'um homem'
            if (idade < 10) {
                //criança
                img.setAttribute('src', 'homemcrianca.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else if (idade < 20){
                //jovem
                img.setAttribute('src', 'homemjovem.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else if (idade < 50){
                //adulto
                img.setAttribute('src', 'homemadulto.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else {
                //idoso
                img.setAttribute('src', 'homemvelho.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            }

        } else if (formularioSexo[1].checked){
            gênero = 'uma mulher'
            if (idade < 10) {
                //criança
                img.setAttribute('src', 'mulhercrianca.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else if (idade < 20){
                //jovem
                img.setAttribute('src', 'mulherjovem.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else if (idade < 50){
                //adulto
                img.setAttribute('src', 'mulheradulta.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            } else {
                //idoso
                img.setAttribute('src', 'mulhervelha.jpg')
                img.style.borderRadius = '150px'
                img.style.width = '250px'
                img.style.height = '250px'
                img.style.padding = '15px'
            }
        }
        resultado.style.textAlign = 'center'
        resultado.innerHTML = `Você é ${gênero
        } de ${idade} anos.`
        resultado.appendChild(img)
    }
}