</head>

<body class="fg">
  <header>
    <div class="head container-xxl d-flex justify-content-between align-items-center h-100">
      <div class="menu-h">
        <img src="img/icons/nav/menu.svg" alt="menu" class="close-mov" id="open-m">
      </div>
      <div class="">
        <a href="index.php"><img src="img/logo/logo.png" alt="Logotipo" class="menu-logo d-none d-lg-block" width="150px"></a>
        <a href="index.php"><img src="img/logo/logotipo.svg" alt="Logotipo" class="menu-logo d-none d-sm-block d-lg-none" width="200px"></a>
        <a href="index.php"><img src="img/logo/logotipo.svg" alt="Logotipo" class="menu-logo d-block d-sm-none" width="170px"></a>
      </div>
      <div class="m-t-nav">
        <nav class="">
          <ul class="d-flex menu-nav align-items-center">
            <li><a href="index.php" class="menu-link p" onmouseover="ocmenuPc()">Inicio</a></li>
            <li><a href="servicios.php" class="menu-link p" onmouseover="menuPc()"
                onmouseleave="ocflecha()">Servicios<svg id="flechamenu" class="Capa_1" data-name="Capa 1"
                  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.61 104.77">
                  <polygon points="87.8 104.77 0 16.97 16.97 0 87.8 70.83 158.63 0 175.6 16.97 87.8 104.77" />
                </svg></a></li>
            <li><a href="trabajos.php" class="menu-link p" onmouseover="ocmenuPc()">Trabajos</a></li>
            <li><a href="nosotros.php" class="menu-link p" onmouseover="ocmenuPc()">Nosotros</a></li>
          </ul>
        </nav>
      </div>
      <div class="menu-cta">
        <button class="cta-s" onclick="mosform()">Contacto</button>
      </div>
    </div>
  </header>
  <!-- menupc -->
  <div id="menu-desp-pc" class="azuldg" onmouseleave="ocmenuPc()">
    <div class="container-xxl d-flex align-items-center justify-content-center">
      <div class="men-desp-pc-s">
        <a href="servicios.php" class="menu-desp-pc-a">
          <h3 class="t-b smenu-link">Servicios</h3>
        </a>
      </div>
      <nav class="men-desp-pc-l">
        <ul class="d-flex flex-column p-0">
          <li><a href="impresion.php" class="smenu-link t-b pm-l">Impresión Offset</a></li>
          <li class="mt20"><a href="acabados.php" class="smenu-link t-b pm-l">Acabados</a></li>
          <li><a href="corte.php" class="smenu-link t-b pm-l">Corte</a></li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- menumovil -->
  <div id="menu-desp-tab">
    <div class="azuldg d-flex flex-column menu-desp-tab justify-content-between">
      <div class="d-flex flex-md-column justify-content-between align-items-md-center">
        <img src="img/icons/nav/x-w.svg" alt="cerrar"
          class="align-self-start align-self-md-end  close-mov order-2 order-md-1" id="close-m">
        <img src="img/logo/white-lg.svg" alt="Logotipo" class="log-mov order-1 order-md-2">
      </div>
      <ul class="menu-movil-des p-0 m-0 w-100 text-center">
        <li><a href="index.php" class="pm t-b mlink lkm" onclick="mosiniciommenu()">Inicio</a></li>
        <li><a href="#javascript void(0)" class="pm t-b mlink lkm m-0" id="ser-men-mov">Servicios<svg class="Capa_1"
              data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.61 104.77">
              <polygon points="87.8 104.77 0 16.97 16.97 0 87.8 70.83 158.63 0 175.6 16.97 87.8 104.77"
                style="fill: #ffffff;"/>
            </svg>
            <ul class="p-0 m-0" id="sub-me">
              <li><a href="#javascrip void(0)" class="pm t-b mlink lkm m-0" id="cerrarmendesp">Servicios <span ><svg class="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 175.6 104.77"><polygon points="87.8 0 175.6 87.8 158.63 104.77 87.8 33.94 16.97 104.77 0 87.8 87.8 0" style="fill:rgb(253, 253, 253)"/></svg></span>
              <li><a href="impresion.php" class="pm-l t-b mlink lkm-sub">Impresión Offset</a></li>
              <li><a href="acabados.php" class="pm-l t-b mlink lkm-sub">Acabados</a></li>
              <li><a href="corte.php" class="pm-l t-b mlink lkm-sub">Corte</a></li>
            </ul>
          </a></li>
        <li><a href="trabajos.php" class="pm t-b mlink lkm">Trabajos</a></li>
        <li><a href="nosotros.php" class="pm t-b mlink lkm">Nosotros</a></li>
        <li><a href="#javascript void(0)" class="pm t-b mlink lkm-cont" onclick="mosformmenu()">Contacto</a></li>
      </ul>
      <div>
        <div class="d-flex justify-content-center justify-content-center w-100">
          <div class="d-flex ">
            <a href="https://www.facebook.com/GraficarsLaPazImprenta" class="rss-h-m" target="_blank"><img
                src="img/icons/rss/f-ft.svg" alt="facebook icono"></a>
            <a href="https://www.facebook.com/GraficarsLaPazImprenta" class="pm mov-hd mlink text-light" target="_blank">Facebook</a>
          </div>
          <div class="d-flex ">
            <a href="https://api.whatsapp.com/send?phone=59179552420" class="rss-h-m rss-h-m-dos" target="_blank"><img
                src="img/icons/rss/w-ft.svg" alt="WhatsApp icono"></a>
            <a href="https://api.whatsapp.com/send?phone=59179552420" class="pm mov-hd mlink text-light" target="_blank">WhatsApp</a>
          </div>
        </div>
        <hr>
        <p class="p text-center">Calle Otero de la Vega, Esquina Francisco Pizarro Nro 295, La Paz</p>
      </div>
    </div>
  </div>
  <a class="cta-movil" onclick="mosform()" id="iconocontact"><img src="img/icons/rss/mensaje.svg" alt="icono contacto" class="iconocontacto"></a>
  