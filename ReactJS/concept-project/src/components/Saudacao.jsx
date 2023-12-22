function Saudacao({nome}) {

    function gerarSaudacao(nomeUsuario) {
        return `Saudações, ${nomeUsuario}`
    }    

    return (
        <>
        {/* fazendo uso de state lift com estrutura condicional */}
            {nome &&
                <p>
                {gerarSaudacao(nome)}</p>
            }
        </>
    )

}

export default Saudacao