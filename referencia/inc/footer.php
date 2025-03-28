<footer class="footer has-background-light">
  <div class="container" style="max-width: 1200px; margin: 0 auto;">
    <div class="columns is-centered">
      <!-- Columna General -->
      <div class="column is-one-third">
        <div class="general">
          <h6 class="title is-6">Hospital Universitario San Jorge</h6>
          <p style="text-align: justify;">VISION:  La E.S.E  Hospital  Universitario San Jorge de Pereira, se posiciona a
            nivel Nacional como una de las mejores instituciones acreditadas en servicios
            de Salud, reconocida por su atención humanizada, científica y tecnológica, por
            su vocación  en  la formación  de talento humano y generación de conocimiento, 
            con amplio sentido social y respeto por el medio ambiente.</p>
        </div>
      </div>
    </div>

    <!-- Nueva fila para el copyright y desarrollador -->
    <div class="columns is-centered">
      <div class="column is-full has-text-centered">
        <p class="copyright-text">Mauricio Sánchez Abella HUSJ  &copy; 2025</p>
      </div>
    </div>
  </div>
</footer>

<style>
  /* Estilo para el footer */
  .footer {
    color: green;
    width: 100%;
    padding: 10px 0; /* Menos altura para que no sea tan grande */
    bottom: 0;
    left: 0;
    background-color: #f4f4f4; /* Fondo de color claro */
  }

  /* Centrado del contenedor */
  .footer .container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-direction: column; /* Coloca las columnas una encima de la otra */
    justify-content: space-between; /* Distribuir las columnas con espacio entre ellas */
    align-items: center; /* Centrado en el eje horizontal */
  }

  /* Las columnas deben tener un ancho igual */
  .column {
    text-align: left;
  }

  /* Estilo para los párrafos */
  p {
    text-align: justify;
  }

  /* Para la estructura de las columnas */
  .columns.is-centered {
    display: flex;
    justify-content: center; /* Alinea las columnas al centro */
    width: 100%; /* División de las columnas */
  }

  .column.is-one-third {
    flex-basis: 100%; /* Asegura que la columna ocupe el ancho completo */
    padding: 0 10px;
  }

  /* Para la fila del copyright */
  .copyright-text {
    font-size: 15px;
    color: #4a4a4a;
    margin-top: 15px;
    text-align: center;
  }

  /* Evitar que el contenido se cubra por el footer */
  body {
    margin-bottom: 02px; /* Añadir un margen inferior para que no se cubra el contenido por el footer */
  }
</style>
