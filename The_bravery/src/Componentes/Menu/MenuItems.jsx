// src/Componentes/Menu/MenuItem.jsx
import Card from '../UI/Card';

const MenuItem = ({ plato }) => {
  return (
    <Card className="menu-item">
      <div className="card-image">
        <img src={plato.imagen} alt={plato.nombre} />
      </div>
      <div className="card-content">
        <h3>{plato.nombre}</h3>
        <p className="description">{plato.descripcion}</p>
        <span className="price">{plato.precio} €</span>
        <button className="btn-add">Añadir</button>
      </div>
    </Card>
  );
};

export default MenuItem;