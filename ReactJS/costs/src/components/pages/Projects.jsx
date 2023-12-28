import { useLocation } from 'react-router-dom'

import Message from "../layout/Message"
import Container from '../layout/Container'
import LinkButton from '../layout/LinkButton'

import styles from './Projects.module.css'

export default function Projects() {

    const location = useLocation()
    let msg = ''
    if(location.state) {
        msg = location.state.message
    }

    return (
        <div className={styles.projects_container}>
            <div className={styles.title_container}>
                <h1>Projects</h1>
                <LinkButton to='/newproject' text="Criar Projeto"/>
            </div>
            {msg && <Message type="success" message={msg}/>}
            <Container customClass="start">
                <p>Projetos...</p>
            </Container>
        </div>
    )
}