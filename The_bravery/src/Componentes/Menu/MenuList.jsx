// src/Componentes/Menu/MenuList.jsx
import { platos } from '../../data/listaPlatos.jsx'; // Importamos los datos
import MenuItem from './MenuItem'; // Importamos el diseño individual

const MenuList = () => {
  return (
    <div className="menu-grid">
      {platos.map((plato) => (
        <MenuItem key={plato.id} plato={plato} />
      ))}
    </div>
  );
};

export default MenuList;