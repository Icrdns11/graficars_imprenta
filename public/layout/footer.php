<footer>
    <div class="container-xxl">
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-12 col-lg-2 mb50">
          <div class="d-flex justify-content-center ft-log">
            <img src="img/logo/white-lg.svg" alt="logo" class="img-fluid" width="250px">
          </div>
        </div>
        <ul
          class="col-12 col-lg-6 text-center d-flex flex-column flex-sm-row align-items-center justify-content-evenly mb50 linkmovilfoteer">
          <li class="d-block"><a href="index.php" class="ft-link">Inicio</a></li>
          <li class="d-block"><a href="servicios.php" class="ft-link">Servicios</a></li>
          <li class="d-block"><a href="trabajos.php" class="ft-link">Trabajos</a></li>
          <li class="d-block"><a href="nosotros.php" class="ft-link">Nosotros</a></li>
          <li class="d-block"><a href="#javascript void(0)" class="ft-link" onclick="mosform()">Contacto</a></li>
        </ul>
        <div class="col-12 col-lg-2 d-flex justify-content-center align-items-center mb50">
          <div class="face p-2">
            <a href="https://www.facebook.com/GraficarsLaPazImprenta" target="_blank"><img
                src="img/icons/rss/f-ft.svg" alt="facebook icono" class="ico-ft"></a>
          </div>
          <div class="wp p-2">
            <a href="https://api.whatsapp.com/send?phone=59179552420" target="_blank"><img
                src="img/icons/rss/w-ft.svg" alt="WhatsApp icono" class="ico-ft"></a>
          </div>
        </div>
        <div class="col-lg-1"></div>
        <p class="text-center ft-gris">Calle Otero de la Vega, Esquina Francisco Pizarro Nro 295, La Paz</p>
        <hr class="text-center ft-gris">
        <p class="text-center ft-gris">Copyright © 2022 Graficar's.</p>
      </div>
    </div>
  </footer>
  <!-- form -->
<div id="formulario">
    <div class="vh-100 w-100 back-form">
      <div class="modf">
        <div class="ctf">
          <h2 class="text-center">Contacto</h2>
          <div>
            <div id="change">
              <form id="form">
                <div>
                  <label for="name" class="p cfp">Nombre:</label>
                  <input for="name" type="name" placeholder="Escribe tu Nombre" class="form-input fit" name="name"
                    id="name">
                </div>
                <div id="error">
                </div>
                <div>
                  <label for="email" class="p cfp">Correo Electrónico:</label><br>
                  <input type="email" placeholder="123@gmail.com" class="form-input fit" id="email">
                </div>
                <div>
                  <label for="message-text" class="p cfp">Mensaje:</label>
                  <textarea class="text form-input fim" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
                </div>
                <div class="d-flex justify-content-between justify-content-lg-end">
                  <button type="button" class="bot-sec-az cl" onclick="ocform()">Cerrar</button>
                  <button type="submit" class="cta" id="cta-cont">Enviar</button>
                </div>
              </form>
            </div>
            <div id="mensaje-en" class=" flex-column align-items-center justify-content-center">
              <p class="pm text-center mensaje-en">Su mensaje ha sido recibido</p>
              <button type="button" class="bot-sec-az" onclick="ocform()">Cerrar Ventana</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>