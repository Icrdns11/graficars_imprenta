<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/nosotros.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>

<!-- migajas -->
<div class="bread">
  <div class="container-xxl d-flex ">
    <a href="index.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Inicio</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Nosotros</p>
  </div>
</div>
<!-- hero -->
<section class="d-flex align-items-center azuldg historia">
  <div class="container-xxl d-flex flex-column align-items-center his">
    <h2 class="text-center t-b">Historia</h2>
    <p class="pm">Graficar's es una empresa fundada en el año 2010, está ubicada en Calle Otero de la Vega esquina
      Francisco Pizarro No. 295 en la zona de San Pedro en La Paz. Ofrecemos servicios como impresión offset,
      encuadernación y otros pedidos especiales. Graficar's está especializada en diseño gráfico e ilustración para
      sus necesidades empresariales o domésticas.</p>
  </div>
</section>
<!-- vision -->
<section class="vision">
  <div class="container-xxl d-flex text-center flex-wrap flex-lg-nowrap">
    <div class="vm celdg">
      <h3 class="h3-s">Misión</h3>
      <p class="p">La imprenta Graficar’s brinda un servicio personalizado de impresión offset a cada cliente con un
        diseño exclusivo.</p>
    </div>
    <div class="vm celdg">
      <h3 class="h3-s">Visión</h3>
      <p class="p">En Graficar, buscamos evolucionar de una empresa de impresión a una empresa que brinde soluciones
        gráficas.</p>
    </div>
  </div>
</section>
<!-- valores -->
<section class="azuldg">
  <div class="container-xxl text-center v">
    <h3 class="t-b h3-m">Valores</h3>
    <div class="container d-flex justify-content-center flex-wrap flex-lg-nowrap text-center">
      <div class="w-100 d-flex flex-column flex-sm-row flex-lg-column punt">
        <div class="p-3 mx-md-4">
          <img src="img/icons/web/time.svg" alt="" class="vl-ic">
        </div>
        <div>
          <h4 class="t-b vv">Puntualidad</h4>
          <p class="p">Estamos comprometidos a cumplir con los plazos establecidos y los requisitos del cliente.</p>
        </div>
      </div>
      <div class="w-100 d-flex flex-column flex-sm-row flex-lg-column punt">
        <div class="p-3 mx-md-4">
          <img src="img/icons/web/people.svg" alt="" class="vl-ic">
        </div>
        <div>
          <h4 class="t-b vv">Cercanía</h4>
          <p class="p">Nuestros clientes están involucrados en todo el proceso de impresión.</p>
        </div>
      </div>
      <div class="w-100 d-flex flex-column flex-sm-row flex-lg-column punt">
        <div class="p-3 mx-md-4">
          <img src="img/icons/web/ok.svg" alt="" class="vl-ic">
        </div>
        <div>
          <h4 class="t-b vv">Calidad</h4>
          <p class="p">Entregamos productos que se ajustan a las necesidades de nuestros clientes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require('./layout/ubicacion.php') ?>

 <!-- clientes -->
 <section class="www">
    <div class="container-xxl d-flex flex-column align-items-center clientes">
      <h3 class="h3-s">Clientes</h3>
      <div class="container-xxl d-flex justify-content-center cli-img">
        <div class="row g-2 g-md-4">
          <div class="col">
            <img src="./img/about/co.png" alt="consame-logo" class="img-fluid">
          </div>
          <div class="col">
            <img src="./img/about/aci.png" alt="aci-logo" class="img-fluid">
          </div>
          <div class="col">
            <img src="./img/about/ba.png" alt="barnett-logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

<?php require('./layout/footer.php') ?>