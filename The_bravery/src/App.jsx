// src/App.jsx
import { Routes, Route } from 'react-router-dom';
import Layout from './Componentes/Layout/Layout';

// Importamos tus páginas según tu estructura
import Portada from './Componentes/Paginas/Portada';
import Platos from './Componentes/Paginas/Platos';
import Reservation from './Componentes/Paginas/Reservation'; // Asumo que se llama así por la imagen
import Nosotros from './Componentes/Paginas/Nosotros';

function App() {
  return (
    <Layout>
      <Routes>
        {/* La ruta "/" es el inicio */}
        <Route path="/" element={<Portada />} />
        
        {/* Ruta para el menú */}
        <Route path="/menu" element={<Platos />} />
        
        {/* Ruta para reservar */}
        <Route path="/reservas" element={<Reservation />} />
        
        {/* Ruta para nosotros */}
        <Route path="/nosotros" element={<Nosotros />} />
      </Routes>
    </Layout>
  )
}

export default App;