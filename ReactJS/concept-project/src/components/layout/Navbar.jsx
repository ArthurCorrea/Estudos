import { Link } from 'react-router-dom'
import styles from './Navbar.module.css'

function Navbar() {

    return(
        <nav>
            <ul className={styles.list}>
                <li><Link to="/">Home</Link></li>
                <li><Link to="/empresa">Empresa</Link></li>
                <li><Link to="/contato">Contato</Link></li>
            </ul>
        </nav>
    )

}

export default Navbar