<?php require('./layout/head.php') ?>
<link rel="stylesheet" href="css/home.css">
<link rel="stylesheet" href="css/style.css">
<?php require('./layout/header.php') ?>

<!-- slider -->
<div id="sliders">
  <!-- Slider pc-->
  <div class="d-none d-lg-flex align-items-center justify-content-center sliderpara">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade mt-2" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active w-25" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="w-25"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="w-25"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="./img/slider/s1.jpg" class="d-block img-fluid img-sli-pc" alt="Impresión Offset">
          <div class="carousel-caption">
            <div class=" container-xxl d-flex flex-column align-items-start justify-content-center h-100">
              <h2 class="text-start">Impresión Offset</h2>
              <a href="impresion.php"><button class="bot-sec-az-sm"> Más información</button></a>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/s2.jpg" class="d-block img-fluid img-sli-pc" alt="Acabados">
          <div class="carousel-caption sli-bl">
            <div class="container-xxl d-flex flex-column align-items-start justify-content-center h-100">
              <h2>Acabados</h2>
              <a href="acabados.php"><button class="bot-sec-az-sm">Más información</button></a>
            </div>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/s3.jpg" class="d-block img-fluid img-sli-pc" alt="Corte de papel">
          <div class="carousel-caption">
            <div class="container-xxl d-flex flex-column align-items-start justify-content-center h-100">
              <h2 class="text-start">Corte</h2>
              <a href="corte.php"><button class="bot-sec-az-sm">Más información</button></a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Slider tab-->
  <div class="vw-100 d-none d-sm-flex align-items-center justify-content-center d-lg-none sliderpara">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active w-25" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="w-25"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="w-25"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="./img/slider/t1.jpg" class="d-block img-fluid slider-img" alt="Impresión Offset">
          <div class="carousel-caption d-block d-flex flex-column align-items-center justify-content-center h-100 sli-wi">
            <h2 class="">Impresión Offset</h2>
            <a href="impresion.php"><button class="bot-sec-az-sm">Más información</button></a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/t2.jpg" class="d-block img-fluid" alt="Acabados">
          <div class="carousel-caption d-block d-flex flex-column align-items-center justify-content-center h-100 sli-bl">
            <h2 class="t-b">Acabados</h2>
            <a href="acabados.php"><button class="bot-sec-bl-sm">Más información</button></a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/t3.jpg" class="d-block img-fluid" alt="Corte de papel">
          <div class="carousel-caption d-block d-flex flex-column align-items-center justify-content-center h-100 sli-wi">
            <h2>Corte</h2>
            <a href="corte.php"><button class="bot-sec-az-sm">Más información</button></a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- Slider cel-->
  <div class="vw-100 d-block d-sm-none d-flex align-items-center justify-content-center d-md-none sliderpara">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active w-25" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="w-25"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3" class="w-25"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="./img/slider/c1.jpg" class="d-block img-fluid slider-img" alt="Impresión Offset">
          <div class="carousel-caption  d-block d-flex flex-column align-items-center justify-content-center h-100 sli-wi">
            <h2 class="">Impresión Offset</h2>
            <a href="impresion.php"><button class="bot-sec-az-sm">Más información</button></a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/c2.jpg" class="d-block img-fluid" alt="Acabados">
          <div class="carousel-caption  d-block d-flex flex-column align-items-center justify-content-center h-100 sli-bl">
            <h2 class="t-b">Acabados</h2>
            <a href="acabados.php"><button class="bot-sec-bl-sm">Más información</button></a>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="./img/slider/c3.jpg" class="d-block img-fluid slider-img2" alt="Corte de papel">
          <div class="carousel-caption  d-block d-flex flex-column align-items-center justify-content-center h-100 sli-wi">
            <h2>Corte</h2>
            <a href="corte.php"><button class="bot-sec-az-sm">Más información</button></a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
<!-- Servicios -->
<section class="d-flex justify-content-center" id="serh">
  <div class="container-xxl text-center">
    <h3 class="h3-m">Servicios</h3>
    <div>
      <div class="d-flex flex-wrap flex-sm-wrap flex-lg-nowrap justify-content-center">
        <div class="w-100 servicios-card sc1">
          <div class="d-flex flex-column flex-sm-row flex-lg-column  justify-content-between h-100">
            <h4>Impresión</h4>
            <a href="./impresion.php"><button class="bot-sec-az bot-end">Más información</button></a>
          </div>
        </div>
        <div class="w-100 servicios-card sc2">
          <div class="d-flex flex-column flex-sm-row flex-lg-column justify-content-between h-100">
            <h4 class="t-b">Acabados</h4>
            <a href="./acabados.php"><button class="bot-sec-bl bot-end">Más información</button></a>
          </div>
        </div>
        <div class="w-100 servicios-card sc3">
          <div class="d-flex flex-column flex-sm-row flex-lg-column justify-content-between h-100">
            <h4>Corte</h4>
            <a href="./corte.php">
              <button class="bot-sec-az bot-end">Más información</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Historia y trabajos -->
<section class="container-xxl d-flex flex-wrap flex-sm-wrap flex-md-wrap flex-lg-nowrap" id="ht">
  <div class="d-flex flex-column align-items-center justify-content-center azuldg his-tra">
    <h3 class="text-center t-b h3-s">Historia</h3>
    <p class="p ht">Graficar's es una empresa fundada en el año 2010, está ubicada en Calle Otero de la Vega de la
      ciudad de La Paz. <br> Ofrecemos servicios como impresión offset, encuadernación, etc.</p>
    <a href="./nosotros.php"><button class="bot-sec-bl">Más información</button></a>
  </div>
  <div class="d-flex flex-column align-items-center justify-content-between azuldg his-tra">
    <h3 class="text-center t-b h3-s">Trabajos</h3>
    <p class="p ht">Compartimos nuestros últimos proyectos, demostrando nuestra excelencia creativa y profesionalismo.
    </p>
    <a href="./trabajos.php"><button class="bot-sec-bl">Más información</button></a>
  </div>
</section>

<?php require('./layout/ubicacion.php') ?>
<?php require('./layout/footer.php') ?>