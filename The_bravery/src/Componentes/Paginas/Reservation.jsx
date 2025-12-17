// src/Componentes/Paginas/Reservation.jsx
import { useState } from 'react';
import Button from '../UI/Button'; // Usando tu componente UI

const Reservation = () => {
  const [datos, setDatos] = useState({ nombre: '', fecha: '' });

  const enviarReserva = async (e) => {
    e.preventDefault();
    // Aquí iría tu fetch al PHP que vimos antes
    console.log("Enviando datos a PHP:", datos);
  };

  return (
    <div className="reservation-page">
      <h2>Reserva tu mesa</h2>
      <form onSubmit={enviarReserva}>
        <input 
          type="text" 
          placeholder="Nombre" 
          onChange={(e) => setDatos({...datos, nombre: e.target.value})}
        />
        <input 
          type="date" 
          onChange={(e) => setDatos({...datos, fecha: e.target.value})}
        />
        {/* Reutilizando tu componente Button */}
        <Button text="Confirmar Reserva" type="submit" />
      </form>
    </div>
  );
};

export default Reservation;