const url = 'http://files.cod3r.com.br/curso-js/funcionarios.json'
const axios = require('axios')


// Pegar a mulher chinesa com o menor salário
const chinesas = f => f.pais === 'China'
const mulheres = f => f.genero === 'F'

const menorSalario = (funcionario, funcionarioAtual) => {
    if(funcionario.salario < funcionarioAtual.salario) {
        return funcionario
    } else {
        return funcionarioAtual
    }
}

axios.get(url).then(response => {
    const funcionarios = response.data
    //console.log(funcionarios)  

    const funcionario = funcionarios.filter(chinesas).filter(mulheres).reduce(menorSalario)
    console.log(funcionario)

    })

