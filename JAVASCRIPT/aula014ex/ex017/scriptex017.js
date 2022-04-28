function calcular(){
    var numero = Number(document.getElementById('numero').value)
    var tabuada = document.getElementById('tabuada')

    

    if (numero === 0) {
        alert('[ERRO] Digite o valor corretamente.')
    } else {
        var contador = 1

        tabuada.innerHTML = ''
        
        while(contador <= 10){
            var item = document.createElement('option')
            item.text = `${numero} x ${contador} = ${numero*contador}`
            //item.value = `tabuada${contador}`
            tabuada.appendChild(item)
            contador++
        } 
    }
    
}

function limpar(){
    tabuada.innerHTML = '<option>Digite um número acima</option>'
}
