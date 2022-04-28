function carregar(){
    var mensagem = document.getElementById('mensagem')
    var imagens = document.getElementById('imagem')

    var data = new Date()
    var hora = data.getHours()
    var minuto = data.getMinutes()
    var segundos = data.getSeconds()
    mensagem.innerHTML = `Agora são ${hora}:${minuto}:${segundos}`

    if (minuto < 10){
        minuto = '0' + minuto
    }

    if (hora >= 5 && hora < 12) {
        //bom dia
        imagens.src = 'fotomanha.jpg'
        document.body.style.background = '#e2cd9f'
    } else if (hora >= 12 && hora < 18) {
        //boa tarde
        imagens.src = 'fototarde.jpg'
        document.body.style.background = '#b9846f'
    } else if (hora >= 18 && hora < 0){
        //boa noite
        imagens.src = 'fotonoite.jpg' 
        document.body.style.background = '#515154'
    } else {
        //boa madrugada
        imagens.src = 'fotonoite.jpg'
        document.body.style.background = '#515154'
    }

}


