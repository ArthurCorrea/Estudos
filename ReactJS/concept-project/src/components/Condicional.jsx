import { useState } from "react"

function Condicional() {

    const [email, setEmail] = useState()
    const [userEmail, setUserEmail] = useState()

    function enviarEmail(e) {
        e.preventDefault()
        setUserEmail(email)
        console.log(userEmail);
    }

    function limparEmail() {
        setUserEmail('')
    }

    return (
        <div>
            <h2>Cadastre seu e-mail</h2>
            <form>
                <input type="email" 
                    placeholder="Digite seu email"
                    onChange={(e) => setEmail(e.target.value)}/>
            </form>        
            <button onClick={enviarEmail}>Enviar e-mail</button>
            
            {/* aplicando condicional no JSX */}
            {userEmail && (
                <div>
                    <p>O e-mail digitado é: {userEmail}</p>
                    <button onClick={limparEmail}>Limpar e-mail</button>
                </div>
            )}
            
        </div>
    )

}

export default Condicional