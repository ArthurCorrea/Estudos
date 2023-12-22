import styles from './Footer.module.css'
//? usando ícones
//? precisa instalar por npm - npm install react-icons
import { FaFacebook, FaInstagram, FaLinkedin } from 'react-icons/fa'

function Footer() {
    return (
        <footer>
            <ul className={styles.social_list}>
                <li> <FaFacebook /></li>
                <li> <FaInstagram /></li>
                <li> <FaLinkedin /></li>
            </ul>
            <p>Rodapé do site</p>
        </footer>
    )
}

export default Footer