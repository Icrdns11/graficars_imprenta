<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/servicios.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>

<!-- migajas -->
<div class="bread">
  <div class="container-xxl d-flex ">
    <a href="./index.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Inicio</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p> <a href="./servicios.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Servicios</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Impresión Offset</p>
  </div>
</div>
<!-- hero -->
<section class="he he1">
  <div class="container-xxl w-100 h-100 d-flex">
    <div class="he-back d-flex flex-column justify-content-center">
      <h2 class="text-center text-lg-start">Impresión Offset</h2>
      <p class="pm">Es la mejor opción para todas aquellas impresiones que requieren calidad en los colores y grandes
        cantidades.</p>
    </div>
  </div>
</section>
<!-- productos -->
<section>
  <div class="container-xxl">
    <div class="d-flex flex-wrap flex-md-nowrap azuldg prod">
      <div class="d-flex flex-column justify-content-center align-items-center text-center w25">
        <h4 class="d-sm-none d-block text-center t-b">Corporativo</h4>
        <img src="./img/service/print/1.jpg" alt="corporativo" class="img-fluid img-r">
      </div>
      <div class="d-flex align-items-center w75 w751">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center t-b">Corporativo</h4>
          <p class="p text-prod">Las publicaciones corporativas tienen el objetivo de aumentar la rentabilidad de las
            funciones principales de las empresas, por lo tanto, son claves para su crecimiento.
            <br>
            Carpetas, tarjetas personales, hojas membretadas,etc.
          </p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap celdg prod">
      <div class="d-flex align-items-center order-2 order-md-1 w75 w752">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center">Publicitario</h4>
          <p class="p text-prod">Las publicaciones publicitarias tienen el objetivo de informar y vender productos o
            servicios de empresas. <br>
            Afiches, volantes, etc</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center t text-center order-1 order-sm-2 order-md-2 w25">
        <h4 class="d-sm-none d-block text-center">Publicitario</h4>
        <img src="./img/service/print/2.jpg" alt="publicidad" class="img-fluid img-r">
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap azuldg prod">
      <div class="d-flex flex-column justify-content-center align-items-center t text-center w25">
        <h4 class="d-sm-none d-block text-center t-b">Editorial</h4>
        <img src="./img/service/print/4.jpg" alt="Etiquetas" class="img-fluid img-r">
      </div>
      <div class="d-flex align-items-center w75 w751">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center t-b">Editorial</h4>
          <p class="p text-prod">Las piezas editoriales están compuestas por un texto y una imagen, pueden ser
            publicitarios o informativos, seleccionando aquellos que satisfagan las necesidades. <br>
            Libros, revistas, catálogos, etc.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap celdg prod">
      <div class="d-flex align-items-center order-2 order-md-1 w75 w752">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center">Etiquetas</h4>
          <p class="p text-prod">Las etiquetas son utilizadas para ser pegadas en otra superficie específica, como
            bolsas, envases con los que se trata de contener la información.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center t text-center order-1 order-sm-2 order-md-2 w25">
        <h4 class="d-sm-none d-block text-center">Etiquetas</h4>
        <img src="./img/service/print/3.jpg" alt="editorial" class="img-fluid img-r">
      </div>
    </div>
  </div>
</section>

<?php require('./layout/footer.php') ?>