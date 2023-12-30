import styles from './Project.module.css'

import { useParams } from 'react-router-dom'
import { useState, useEffect } from 'react';

export default function Project() {

    const { id } = useParams()
    
    const [project, setProject] = useState([])


    //? resgatando projeto do banco de dados
    useEffect(() => {
        fetch(`http://localhost:5000/projects/${id}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json())
        .then(data => setProject(data))
        .catch(error => console.log(error))
    }, [id])

    return (
        <div>
            {project && (
                <p>{project.name}</p>
            )}
        </div>
    )
}