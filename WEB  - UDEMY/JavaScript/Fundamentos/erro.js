function tratarErro(){
    throw new Error('Erro de leitura.')
}

function mostrarNome(obj){
    try {
        console.log(obj.nome.toUpperCase() + '!')
    } catch (e) {
        tratarErro(e)
    } finally {
        console.log('Aqui será executado de toda maneira.')
    }
}

const obj = { nome: 'Arthur' }
mostrarNome(obj)