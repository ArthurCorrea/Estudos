import Frase from "./Frase";

function HelloWorld() {

    //? a partir do return() começa o JSX
    return (
        //* aqui já é JSX
        <div>
            <h2>Primeiro componente externo em React</h2>

            {/* também é possível importar de outros componentes*/}
            <Frase />
            
        </div>
    )

}

//* exportando o componente para ser usado em outros arquivos
export default HelloWorld;