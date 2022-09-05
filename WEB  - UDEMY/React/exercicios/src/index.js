import React from 'react'
import ReactDOM from 'react-dom'

import Primeiro from './componentes/Primeiro'

import BomDia from './componentes/Bomdia'

import Saudacao from './componentes/Saudacao'

import Pai from './componentes/Pai'
import Filho from './componentes/Filho'

ReactDOM.render(<Primeiro/>, document.getElementById('root'))
ReactDOM.render(<BomDia nome="Arthur"/>, document.getElementById('root'))

ReactDOM.render(
    <div>
        <Pai nome="Thúzin"  sobrenome="Carvalho">
            <Filho nome="Vinícius" />
            <Filho nome="Gabriel" />
            <Filho nome="Pedro" />
        </Pai>
    </div>
, document.getElementById('root'))