// src/Componentes/UI/Card.jsx
import './Card.css'; // Crearemos este CSS abajo

const Card = ({ children, className }) => {
  return (
    <div className={`card ${className}`}>
      {children}
    </div>
  );
};

export default Card;