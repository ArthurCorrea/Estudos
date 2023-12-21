//* todo hook precisa ser importado
import { useState } from 'react'

function Form() {

    //? para usá-los, define-se const com seus usos
    const [name, setName] = useState('Roberto')
    const [password, setPassword] = useState()

    function cadastrarUsuario(e) {
        e.preventDefault()
        console.log(`Usuário: ${name} | Senha: ${password}`);
    }


    return(
        <>
            <h3>Cadastro</h3>
            <form onSubmit={cadastrarUsuario}>
                <div>
                    <label htmlFor="name">Nome: </label>
                    <input type="text" name="name" id="name" 
                            placeholder="Digite seu nome" 
                            onChange={(e) => setName(e.target.value)}/>
                </div>
                <div>
                    <label htmlFor="password">Senha: </label>
                    <input type="password" name="password" id="password" 
                            placeholder="Digite sua senha" 
                            onChange={(e) => setPassword(e.target.value)}/>
                </div>
                <div>
                    <input type="submit" value="Cadastrar" />
                </div>

            </form>
        </>
    )
}

export default Form