//? usado para definir tipos para as props
import PropTypes from 'prop-types'

//? usando react fragments com props mais avançadas
function Item( {marca, ano_lancamento} ) {
    return(
        <>
            <li>{marca} - {ano_lancamento}</li>
        </>
    )
}

//? quando acessar a proprieda, usa-se a primeira letra minúscula
Item.propTypes = {
    // sintaxe para definir o tipo da prop
    marca: PropTypes.string.isRequired,
    ano_lancamento: PropTypes.number
}

Item.defaultProps = {
    marca: 'Faltou a marca',
    ano_lancamento: 0
}

export default Item