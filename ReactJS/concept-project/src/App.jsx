import './App.css';

import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import Navbar from './components/layout/Navbar';
import Footer from './components/layout/Footer';
import Home from './pages/Home';
import Contato from './pages/Contato';
import Empresa from './pages/Empresa';


function App() {

  return (

    //? configurando rotas em React
    //? Router - define o contexto geral da página
    //? Routes - define os links (tem que linkar o to= ao path=)
    //? Route - rota da página
    <Router>
      
      
      <Navbar />
      

      <Routes>

        <Route path='/' element={ <Home/> }/>
        <Route path='/empresa' element={ <Empresa/> }/>
        <Route path='/contato' element={ <Contato/> }/>
        
      </Routes>

      <Footer />

    </Router>
  )
}

export default App;
