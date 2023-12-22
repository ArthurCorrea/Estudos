import {BrowserRouter as Router, Routes, Route, Link} from 'react-router-dom'

import Home from './components/pages/Home';
import NewProject from './components/pages/NewProject';
import Company from './components/pages/Company';
import Contact from './components/pages/Contact';

import Container from './components/layout/Container';

function App() {
  return (
    <Router>
      
      <div>
        <Link to="/">Home</Link>
        <Link to="/newproject">Novo Projeto</Link>
        <Link to="/company">Sobre nós</Link>
        <Link to="/contact">Contato</Link>
      </div>

      <Container customClass="min-height">
        <Routes>
            <Route exact path='/' element={ <Home/> }/>
            <Route exact path='/newproject' element={ <NewProject/> }/>
            <Route exact path='/company' element={ <Company/> }/>
            <Route exact path='/contact' element={ <Contact/> }/>
        </Routes>
      </Container>

      <p>Footer</p>
    </Router>
  );
}

export default App;
