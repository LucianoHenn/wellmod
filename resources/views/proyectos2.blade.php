<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Video Background &#8211; Prague</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" />
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/et-line-font.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/unit-test.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css?v=1') }}" />
    <script src="{{ asset('js/jquery.js') }}"></script>

    <style>
        .top-content .carousel-caption {
            position: relative;
            left: auto;
            right: auto;
            bottom: auto;
        }

        .top-content .carousel-indicators {
            bottom: -40px;
        }
    </style>
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
            <!-- /mobile icon -->

            <!--SOCIAL-->
            <!-- <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
      </a>
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

    <div class="container-fluid no-padd">
        <div class="col-xs-12 no-padd">
            <div class="container-fluid top-banner no-padd  big fullheight light">

                <img src="https://prague.foxthemes.me/wp-content/uploads/2019/04/mountine_house.jpg" class="s-img-switch" alt="main-banner image">
                <div class="top-banner-cursor"></div>
            </div>
        </div>
    </div>


    <div class="container no-padd">
        <div class="row-fluid margin-lg-0t margin-sm-20t">
            <div class="col-sm-12 no-padd">
                <div class="vc_column-inner no-padd-md">
                    <div class="heading left dark">
                        <div class="subtitle">PROYECTOS</div>
                        <h2 class="title">Nuestras entregas.</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel wrapper -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://static.wixstatic.com/media/435830_ce9d00101b1d49b7b82b10667d8a0fe9~mv2.jpg/v1/fill/w_292,h_219,fp_0.50_0.50,q_90,enc_auto/435830_ce9d00101b1d49b7b82b10667d8a0fe9~mv2.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <video class="img-fluid" autoplay loop muted>
                    <source src="https://mdbcdn.b-cdn.net/img/video/Tropical.mp4" type="video/mp4" />
                </video>
            </div>
            <div class="carousel-item">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/84910153?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" allowfullscreen></iframe>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" ariahidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Carousel wrapper -->

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
                        <p>Módulos premium para casas, turismo, oficinas y más.
                            <br>
                            Desde Córdoba a distintos puntos del país.
                            <br>
                            By <a target="_blank" class="font-weight-bold" style="font-size: 13px;" href="http://www.palmerovucovich.com">palmerovucovich</a> & <a style="font-size: 13px;" class="font-weight-bold" target="_blank" href="http://sicasa.net.ar">sica.sa</a>
                        </p>
                    </div>

                </div>
                <div class="prague-footer-info-block">

                    <h6 class="footer-info-block-title">PONTE EN CONTACTO</h6>

                    <div class="footer-info-block-content">
                        <p><a href="tel:+7(885)5896985">+ 54 9 351 816 00945</a></p>
                        <p><a href="mailto:prague-architects@info.com">hola@wellmod.com.ar</a></p>
                        <p>Oficina Comercial: Luis de Tejeda 4212 - Córdoba, Argentina</p>
                        <p>
                            Planta Industrial y Showroom: Monseñor Pablo Cabrera 4809</p>
                    </div>

                </div>
            </div>

    </footer>



    <script src="{{ asset('js/hammer.min.js') }}"></script>
    <script src="{{ asset('js/foxlazy.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>