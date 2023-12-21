import styles from './List.module.css';
import Item from './Item';

//? usando react fragments
function List() {
    return(
        //? a sintaxe é <></>
        <>

            <h2>React Fragment</h2>
            <p>Exemplo básico</p>
            <span>Funciona do mesmo jeito, mas sem poluir o código HTML</span>
            <ul className={styles.lista}>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>1</li>
            </ul>

            <ul className={styles.lista}>
                <Item marca="Ferrari" ano_lancamento={1999}/>
                <Item marca="Buggati" ano_lancamento={2003}/>
                <Item marca="Fiat" ano_lancamento={2019}/>
                <Item marca="Volks" ano_lancamento={2019}/>
                {/* usando o defaultProps */}
                <Item />
                <Item marca='Uno'/>
                <Item ano_lancamento={2019}/>
            </ul>

        </>
    )
}

export default List