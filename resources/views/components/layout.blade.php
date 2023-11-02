<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Wellmod | Arquitectura modular transportable</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="format-detection" content="telephone=no" />

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" />
  <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
  <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/et-line-font.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/unit-test.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css?v=1') }}" />
  <style>
    .logo {
      display: inline;
      max-width: 200px;
      max-height: 70px;
      width: auto;
      height: auto;
    }

    .prague-footer .footer-bottom-content {
      padding-top: 33px;
    }
  </style>
  <script src="{{ asset('js/jquery.js') }}"></script>
</head>

<body>
  <!--PRELOADER-->
  <div class="prague-loader">
    <div class="prague-loader-wrapper">
      <div class="prague-loader-bar">WELLMOD</div>
    </div>
  </div>
  <!--/PRELOADER-->

  <!--HEADER-->
  <header class="prague-header simple sticky-menu sticky-mobile-menu {{ isset($darkHeader) ? 'dark' : 'light' }}">
    <!--LOGO-->
    <div class="prague-logo">
      <a href="index.html">
        <img width="110px" height="46" src="{{ isset($darkHeader) ?  asset('images/logo-dark.png') : asset('images/logo-white.png')  }}" class="image_logo" alt="logo" /></a>
    </div>
    <!--/LOGO-->

    <div class="prague-header-wrapper">
      <!--NAVIGATION-->
      <div class="prague-navigation">
        <div class="pargue-navigation-wrapper">
          <div class="prague-navigation-inner">
            <nav>
              <ul class="main-menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children {{ request()->is('/') ? ' current-menu-parent' : '' }} ">
                  <a href="/">Inicio</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children {{ request()->is('/proyectos') ? ' current-menu-parent' : '' }}">
                  <a href="/proyectos">Proyectos</a>
                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                  <a href="/tipologias">Tipologias</a>

                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                  <a href="/preguntas-frecuentes">Preguntas Frecuentes</a>

                </li>
                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children">
                  <a href="/nosotros">Nosotros</a>
                  <ul class="sub-menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                      <a href="/prensa">Prensa</a>
                    </li>

                  </ul>

                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children">
                  <a href="/contacto">Contacto</a>

                </li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--/NAVIGATION-->

      <!-- mobile icon -->
      <div class="prague-nav-menu-icon">
        <a href="#">
          <i></i>
        </a>
      </div>
      <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
      </a>
      <!-- /mobile icon -->

      <!--SOCIAL-->
      <!-- 
      <div class="prague-social-nav">
        <a href="#">
          <i class="fa fa-chain-broken" aria-hidden="true"></i>
        </a>

        <ul class="social-content">
          <li>
            <a target="_blank" href="https://api.whatsapp.com/send/?phone=543518160094&text&type=phone_number&app_absent=0">
              <i aria-hidden="true" class="fa fa-whatsapp"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.instagram.com/wellmod.ar">
              <i aria-hidden="true" class="fa fa-instagram"></i>
            </a>
          </li>
          <li>
            <a target="_blank" href="https://www.facebook.com/wellmod.ar/">
              <i aria-hidden="true" class="fa fa-facebook"></i>
            </a>
          </li>

        </ul>
      </div> -->
      <!--/SOCIAL-->
    </div>
  </header>
  <!--END HEADER-->



  <!--CONTENT-->

  <div class="paralax-text-share-icons">

    <div class="prague-share-icons">

      <button data-share="http://www.facebook.com/sharer.php?u=luxurious-apartment.html&amp;t=Pastel Tones design" class="icon fa fa-facebook fa-2x"></button>

      <!-- <button data-share="http://twitter.com/home/?status=Pastel Tones design - luxurious-apartment.html" class="icon fa fa-whatsapp"></button> -->

      <button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Luxurious Apartment&amp;url=luxurious-apartment.html" class="icon fa fa-instagram"></button>


    </div>

  </div>

  {{ $slot }}

  <!--/CONTENT-->

  <footer class="mt-5 prague-footer default s-back-switch" style="background-image: url(&quot;https://prague-html.foxthemes.me/img/home/ffa51a33625455.56b20f01c3608.jpg&quot;);">

    <img src="img/home/ffa51a33625455.56b20f01c3608.jpg" data-lazy-src="img/home/ffa51a33625455.56b20f01c3608.jpg" class="s-img-switch" alt="footer banner" style="display: none;">
    <div class="footer-content-outer" style="
    padding: 20px 0;
">
      <div class="footer-top-content">
        <div class="prague-footer-main-block">
          <div class="prague-logo">
            <a href="index.html">
              <img src="{{asset('images/logo-white.png')  }}" data-lazy-src="{{asset('images/logo-white.png')  }}" class="attachment-full size-full" alt="logo" style="height: 80px;"> </a>
          </div>

          <div class="footer-main-content">
            <p>
              Wellmod es una marca registrada de PVS SAS.
              <br>
              Posee certificación de aptitud Técnica N#
              otorgada
              por la secretaria de vivienda de la nacion.
              <br>

            </p>
          </div>

        </div>
        <div class="prague-footer-info-block">

          <h6 class="footer-info-block-title">CONTACTANOS</h6>

          <div class="footer-info-block-content">
            <p><a href="tel:+7(885)5896985">+ 54 9 351 816 00945</a></p>
            <p><a href="mailto:prague-architects@info.com">hola@wellmod.com.ar</a></p>
            <p>Oficina Comercial: Luis de Tejeda 4212 - Córdoba, Argentina</p>
            <p>
              Planta Industrial y Showroom: Monseñor Pablo Cabrera 4809</p>
          </div>

        </div>
      </div>

      <div class="footer-bottom-content">

        <!-- Footer copyright -->
        <div class="footer-copyright">
          <p>
            Forma parte de:
            <img class="logo" src="data:image/jpeg;base64,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" alt="" width="130">
            <img class="logo" src="https://media.licdn.com/dms/image/D4D03AQEutYV6brNAjQ/profile-displayphoto-shrink_800_800/0/1692723428487?e=2147483647&v=beta&t=mlGqBUgCCNqWAD1CD2pnxBLhUPL4dCNZDAubvsm6rA0" alt="" width="100px">
          </p>
        </div>
        <!-- End footer copyright -->


      </div>

  </footer>


  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/hammer.min.js') }}"></script>
  <script src="{{ asset('js/foxlazy.min.js') }}"></script>
  <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('js/all.js') }}"></script>
  <script src="{{ asset('js/countTo.js') }}"></script>
  <script src="{{ asset('js/revolution-slider.js') }}"></script>

</body>

</html>