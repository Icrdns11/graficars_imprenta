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
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Corte</p>
  </div>
</div>
<!-- hero -->
<section class="he he3">
  <div class="container-xxl w-100 h-100 d-flex">
    <div class="he-back d-flex flex-column justify-content-center">
      <h2 class="text-center text-lg-start">Corte</h2>
      <p class="pm">El corte se realiza para reducir las hojas al tamaño deseado también sirve para eliminar los
        bordes en las impresiones.</p>
    </div>
  </div>
</section>
<!-- productos -->
<section>
  <div class="container-xxl">
    <div class="d-flex flex-wrap flex-md-nowrap azuldg prod">
      <div class="d-flex flex-column justify-content-center align-items-center text-center w25">
        <h4 class="d-sm-none d-block text-center t-b">Refile</h4>
        <img src="./img/service/cut/2.jpg" alt="Refile" class="img-fluid img-r">
      </div>
      <div class="d-flex align-items-center w75 w751">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center t-b">Refile</h4>
          <p class="p text-prod">El refilado reduce los efectos del exceso de tinta y proporciona una superficie con
            una textura más uniforme.
          </p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
    </div>
    <div class="d-flex flex-wrap flex-md-nowrap celdg prod">
      <div class="d-flex align-items-center order-2 order-sm-1 w75 w752">
        <div class="d-flex flex-column">
          <h4 class="d-none d-sm-block text-center">Corte de Hojas</h4>
          <p class="p text-prod">El corte de hojas sirve para cortar perfectamente con bordes rectos para tener una
            impresión correcta.</p>
          <button class="cta align-self-center align-self-lg-end" onclick="mosform()">Envíanos un mensaje</button>
        </div>
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center t text-center order-1 order-sm-2 w25">
        <h4 class="d-sm-none d-block text-center">Corte de Hojas</h4>
        <img src="./img/service/cut/1.jpg" alt="Corte de Hojas" class="img-fluid img-r">
      </div>
    </div>
  </div>
</section>

<?php require('./layout/footer.php') ?>