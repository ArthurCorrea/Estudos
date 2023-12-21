import Button from "./events/Button";

function Evento(  ) {

    function meuEvento() {
        console.log(`Primeiro evento ativado`);
    }

    function segundoEvento() {
        console.log('Segundo evento ativado!!!!');
    }

    return(
        <div>
            <p>Clique para acionar um evento</p>
            <Button event={meuEvento} text="Primeiro Evento"/>
            <Button event={segundoEvento} text="Segundo Evento"/>
            {/* semelhante ao JavaScript puro */}
            
        </div>
    )

}

export default Evento