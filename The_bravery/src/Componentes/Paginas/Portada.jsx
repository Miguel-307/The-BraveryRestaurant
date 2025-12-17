// src/Componentes/Paginas/Portada.jsx
import { Link } from 'react-router-dom';

const Portada = () => {
  return (
    <div className="hero-section">
      <div className="overlay">
        <h1>The Bravery Restaurant</h1>
        <p>Donde la tradición se encuentra con la valentía.</p>
        <Link to="/menu" className="cta-button">Ver Carta</Link>
      </div>
    </div>
  );
};

export default Portada;