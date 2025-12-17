// src/Componentes/Paginas/Platos.jsx
import MenuList from '../Menu/MenuList';

const Platos = () => {
  return (
    <section>
      <h1>Nuestra Carta</h1>
      <p>Descubre los sabores que tenemos para ti.</p>
      
      {/* MenuList se encargará de renderizar la lista de items */}
      <MenuList /> 
    </section>
  );
};

export default Platos;