function OutraLista( {itens} ) {
    return (
        <>
            <h3>Lista com Frameworks</h3>

            {/* usando funções de array em JSX junto com estrutura condicional*/}
            {itens.length > 0 ? (
                itens.map((item, index) => (
                    <p key={index}>{item}</p>
                ))) : (
                    <p>Não existem itens</p>
                )
            }
            
        </>
    )
}

export default OutraLista