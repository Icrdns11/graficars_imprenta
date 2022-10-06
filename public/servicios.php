<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/servicio.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>
<!-- migajas -->
<div class=" bread">
  <div class="container-xxl d-flex ">
    <a href="./index.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Inicio</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Servicios</p>
  </div>
</div>
<!-- hero -->
<section class="ser-her d-flex flex-column justify-content-center">
  <div class="container-xxl d-flex flex-column h-100">
    <div class="d-flex flex-column align-items-center justify-content-center ser-hero-uno h-100">
      <h2 class="text-center">Servicios</h2>
      <p class="pm">En la imprenta Graficar´s, puede esperar encontrar una variedad de servicios que siempre son
        apropiados para las necesidades de nuestros clientes.</p>
    </div>
    <div class="d-flex justify-content-center ser-hero2 h-100">
      <div class="ser-he-im1 ser-he-anim">
      </div>
      <div class="ser-he-im2 ser-he-anim">
      </div>
      <div class="ser-he-im3 ser-he-anim">
      </div>
    </div>
  </div>
</section>
<!-- servicios -->
<section class="service">
  <div class="container-xxl">
    <div class="d-flex flex-wrap flex-sm-wrap flex-lg-nowrap flex-xl-nowrap justify-content-center">
      <div class="w-100 card-ser d-flex justify-content-center azuldg">
        <div class="d-flex flex-column align-items-center justify-content-between">
          <h4 class="t-b">Impresión</h4>
          <p class="p my-4">En la imprenta Graficar´s, puede esperar encontrar una variedad de servicios que siempre
            son apropiados para las necesidades de nuestros clientes.</p>
          <a href="./impresion.php"><button class="bot-sec-bl">Más información</button></a>
        </div>
      </div>
      <div class="w-100 card-ser d-flex justify-content-center azuldg">
        <div class="d-flex flex-column align-items-center justify-content-between">
          <h4 class="t-b">Acabados</h4>
          <p class="p my-4">Es la mejor opción para todas aquellas impresiones que requieren calidad en los colores
            y
            grandes cantidades.</p>
          <a href="./acabados.php"><button class="bot-sec-bl">Más información</button></a>
        </div>
      </div>
      <div class="w-100 card-ser d-flex justify-content-center azuldg">
        <div class="d-flex flex-column align-items-center justify-content-between">
          <h4 class="t-b">Corte</h4>
          <p class="p my-4">Los acabados son realizados en piezas impresas tiene un objetivo decorativo, también
            puede
            brindar protección adicional.</p>
          <a href="./corte.php"><button class="bot-sec-bl">Más información</button></a>
        </div>
      </div>
    </div>
  </div>

</section>


<?php require('./layout/ubicacion.php') ?>
<?php require('./layout/footer.php') ?>