<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/servicios.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>

<!-- migajas -->
<div class=" bread">
  <div class="container-xxl d-flex ">
    <a href="./index.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Inicio</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p> <a href="./servicios.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Servicios</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Acabados</p>
  </div>
</div>
<!-- hero -->
<section class="he he2">
  <div class="container-xxl w-100 h-100 d-flex">
    <div class="he-back d-flex flex-column justify-content-center">
      <h2 class="text-center text-lg-start">Acabados</h2>
      <p class="pm">Los acabados son realizados en piezas impresas tiene un objetivo decorativo, también puede brindar
        protección adicional.</p>
    </div>
  </div>
</section>
<!-- productos -->
<section>
  <div class="container-xxl">
    <div class="d-flex flex-wrap flex-md-nowrap azuldg prod">
      <div class="d-flex flex-column justify-content-center align-items-center text-center w25">
        <h4 class="d-sm-none d-block text-center t-b">Encuadernado</h4>
        <img src="./img/service/finishes/1.jpg" alt="Encuadernado" class="img-fluid img-r">
      </div>
      <div class="d-flex align-items-center w75 w751">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center t-b">Encuadernado</h4>
          <p class="p text-prod">En la encuadernación implica la unión de las hojas individuales juntas, normalmente
            es utilizada en portadas de libros
          </p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap celdg prod">
      <div class="d-flex align-items-center order-2 order-sm-1 w75 w752">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center">Anillado</h4>
          <p class="p text-prod">El anillado implica la unión de hojas con una espiral supone la parte esencial del
            proceso de encuadernado.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center t text-center order-1 order-sm-2 w25">
        <h4 class="d-sm-none d-block text-center">Anillado</h4>
        <img src="./img/service/finishes/2.jpg" alt="Anillado" class="img-fluid img-r">
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap azuldg prod">
      <div class="d-flex flex-column justify-content-center align-items-center t text-center w25">
        <h4 class="d-sm-none d-block text-center t-b">Barnizado UV</h4>
        <img src="./img/service/finishes/4.jpg" alt="Barnizado UV" class="img-fluid img-r">
      </div>
      <div class="d-flex align-items-center w75 w751">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center t-b">Barnizado UV</h4>
          <p class="p text-prod">El barnizado es una manera de resaltar las cualidades del material que lo recubren y
            protegerlo contra la degradación causada por los elementos.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap celdg prod">
      <div class="d-flex align-items-center order-2 order-md-1 w75 w752">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center">Troquelado</h4>
          <p class="p text-prod">El troquelado se usa para hacer cortes especiales o cortes decorativos, se usan para
            crear cajas.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center t text-center order-1 order-sm-2 w25">
        <h4 class="d-sm-none d-block text-center">Troquelado</h4>
        <img src="./img/service/finishes/3.jpg" alt="Troquelado" class="img-fluid img-r">
      </div>
    </div>
  </div>
</section>

<?php require('./layout/footer.php') ?>