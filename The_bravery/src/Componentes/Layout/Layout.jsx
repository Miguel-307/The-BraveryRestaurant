// src/Componentes/Layout/Layout.jsx
import Navbar from './Navbar';
import Footer from './Footer';


// 'children' es el contenido que cambia (Portada, Platos, etc.)
const Layout = ({ children }) => {
  return (
    <div className="app-container">
      <Navbar />
      <main className="content">
        {children}
      </main>
      <Footer />
    </div>
  );
};

export default Layout;