<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/trabajos.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>

<!-- migajas -->
<div class=" bread">
  <div class="container-xxl d-flex">
    <a href="./index.php" class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2 bread-a">Inicio</a>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">></p>
    <p class="p mx-2 my-2 mx-sm-3 my-sm-2 mx-lg-3 my-lg-2">Trabajos</p>
  </div>
</div>
<!-- hero -->
<section class="container-fluid mb-2 www">
  <div class="work-hero">
    <div class="d-flex justify-content-center align-items-center overflow-hidden her-img-pad">
      <div class="her-img">
      </div>
    </div>
    <div class="container-xxl d-flex flex-column align-items-center her-tex">
      <h2>Trabajos</h2>
      <p class="pm">Compartimos nuestros últimos proyectos, demostrando nuestra excelencia creativa y profesionalismo.
      </p>
    </div>
  </div>
</section>
<!-- Galeria -->
<div class="container-xxl">
  <div class="row g-3">
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodaluno()">
        <img src="img/works/1.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodaldos()">
        <img src="img/works/2.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodaltres()">
        <img src="img/works/3.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalcuat()">
        <img src="img/works/4.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalcinc()">
        <img src="img/works/5.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalseis()">
        <img src="img/works/6.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalsiet()">
        <img src="img/works/7.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalocho()">
        <img src="img/works/8.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalnuev()">
        <img src="img/works/9.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodaldiez()">
        <img src="img/works/10.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodalonc()">
        <img src="img/works/11.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
    <div class="col-12 col-sm-6 col-lg-4 box">
      <a href="javascript:void(0)" onclick="galeriamodaldoc()">
        <img src="img/works/12.jpg" alt="uno" class="img-fluid gr">
      </a>
    </div>
  </div>
</div>
<!--Galeria modal -->
<div id="galModuno">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/1.jpg" alt="libro" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodaluno()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModdos">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/2.jpg" alt="folder" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodaldos()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModtres">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/3.jpg" alt="volante" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodaltres()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModcuat">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/4.jpg" alt="sobre" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalcuat()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModcinc">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/5.jpg" alt="volante" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalcinc()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModseis">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/6.jpg" alt="certificado" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalseis()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModsiet">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/7.jpg" alt="sobre" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalsiet()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModocho">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/8.jpg" alt="etiqueta" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalocho()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModnuev">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/9.jpg" alt="volante" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalnuev()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModdiez">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/10.jpg" alt="etiqueta" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodaldiez()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModonc">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/11.jpg" alt="volante" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodalonc()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div id="galModdoc">
  <div class="vh-100 w-100 gal-mod">
    <div class="mod">
      <div class="d-flex justify-content-center">
        <img src="img/works/12.jpg" alt="volante" class="img-fluid mod-img">
      </div>
      <div class="d-flex justify-content-center w-100">
        <button type="button" class="bot-sec-az bot-mod" aria-label="Close" onclick="cerrargaleriamodaldoc()">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<?php require('./layout/ubicacion.php') ?>
<?php require('./layout/footer.php') ?>