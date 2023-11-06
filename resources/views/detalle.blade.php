<x-layout>
    <style>
        .video {
            border: none;
            background: white;
        }
    </style>
    <x-slot:darkHeader>
        dark
        </x-slot>
        <!--MAIN BODY-->
        <div class="container-fluid no-padd">
            <div class="row-fluid no-padd ">
                <div class="col-sm-12 no-padd">

                    <div class="project-detail-slider margin-lg-0t margin-sm-100t margin-xs-75b no-padd-bottom">
                        <div class="project-detail-slider-banner">
                            <div class="project-detail-main-slider slick-slider" data-key="1" data-arrows="0" data-autoplay="0" data-speed="1000" data-autoplay-speed="0" data-fade="1" data-for=".project-detail-thumb-slider" data-width="0" data-slides="1">

                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto1.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto2.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto3.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide ">
                                    <video height="100%" width="auto" controls>
                                        <source src="{{asset('images/paso-calmo/video.mp4')  }}" type="video/mp4">
                                    </video>
                                    <!-- <iframe data-mute="on" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" frameborder="0" class="video" allowfullscreen></iframe> -->
                                </div>

                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto1.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto2.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto3.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>



                            </div>

                            <div class="project-detail-thumb-slider slick-slider" data-key="1" data-arrows="0" data-autoplay="0" data-speed="1000" data-autoplay-speed="5000" data-for=".project-detail-main-slider" data-width="0" data-focus="1" data-vertical="1" data-vertical-swiping="1" data-slides="6">

                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto1.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto2.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto3.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <video width="100%" height="100%" src="{{asset('images/paso-calmo/video.mp4')  }}">

                                    </video>
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto1.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto2.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>
                                <div class="project-detail-main-slide slick-slide">
                                    <img src="{{asset('images/paso-calmo/foto3.jpg')  }}" class="s-img-switch" alt="slider image" />
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container no-padd">
            <div class="row-fluid no-padd">
                <div class="col-sm-6 no-padd-inner">
                    <div class="heading no-padd-top-bottom left dark">

                        <div class="subtitle  text-alight-lft">PROYECTO</div>
                        <h2 class="title  text-alight-lft">Paso Calmo</h2>
                        <div class="content text-alight-lft">
                            <p>We propose creating a multifunctional space where you can make a choice: either
                                to
                                retire or be together with everybody. The space, clear of all unnecessary
                                items,
                                will take you to another dimension and help you to get tuned to a calm repose.
                                Lot’s of light and air. In the center of the room there is a functional zoning
                                volume, a white cube, dividing the entire living room into 5 zones: active
                                pastime
                                area, TV area, dressing area, secluded relaxation area and the central area –
                                relaxation area, located inside the white volume.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6  margin-lg-75t margin-xs-10t margin-top-md">
                    <div class="heading no-padd-top-bottom left dark">
                        <div class="subtitle display-none-md"> </div>
                        <div class="content text-alight-lft  no-marg-767 ">
                            <p>Under the cube there are withdrawable soft modules, and inside the cube there is
                                a
                                live tree that is illuminated from the above roof window. This is a place for
                                solitude, meditation and relaxation. Thus, with the help of withdrawable
                                modules,
                                you can create different zones for conversations, board games, and the one who
                                needs to retire can go and have a rest under the tree. Also, we do not forget
                                about
                                a place for storing clothes. There is a cabinet along one of the many-many
                                walls.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row-fluid">
                <div class="col-sm-12 no-padd-inner">

                    <div class="project-detail-slider-outer">
                        <div class="project-details-slider-3d">
                            <iframe src="https://myhub.autodesk360.com/ue283d8b2/shares/public/SH7f1edQT22b515c761ef57601e086f95852?mode=embed" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="container no-padd">
            <div class="row-fluid margin-lg-50t ">
                <div class="col-sm-12 no-padd">
                    <div class="project-detail-block-outer">
                        <div class="project-detail-block-wrapper">
                            <div class="project-detail-block-item">
                                <div class="project-detail-block-title">
                                    YEAR </div>
                                <div class="project-detail-block-descr">
                                    <p>
                                        2016
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="project-detail-block-wrapper">
                            <div class="project-detail-block-item">
                                <div class="project-detail-block-title">
                                    LOCATION </div>
                                <div class="project-detail-block-descr">
                                    <p>
                                        Minsk, Belarus
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="project-detail-block-wrapper">
                            <div class="project-detail-block-item">
                                <div class="project-detail-block-title">
                                    CREATIVE DIRECTOR </div>
                                <div class="project-detail-block-descr">
                                    <p>
                                        Andrus' Bezden
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="project-detail-block-wrapper">
                            <div class="project-detail-block-item">
                                <div class="project-detail-block-title">
                                    VISUALIZATION </div>
                                <div class="project-detail-block-descr">
                                    <p>
                                        Sasha Hamolin
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container project-detail-simple margin-lg-125b margin-sm-75b">
            <div class=" prague-share-icons">
                <div class="prague-share-label">HECHO A MEDIDA</div>

                <!-- <button data-share="http://www.facebook.com/sharer.php?u=alto-furniture.html&amp;t=Alto Furniture" class="icon fa fa-facebook"></button>

                <button data-share="http://twitter.com/home/?status=Alto Furniture - alto-furniture.html" class="icon fa fa-twitter"></button>

                <button data-share="http://www.linkedin.com/shareArticle?mini=true&amp;title=Alto Furniture&amp;url=alto-furniture.html" class="icon fa fa-linkedin"></button>

                <button data-share="http://pinterest.com/pin/create/button/?url=alto-furniture.html&media=img/alto-furniture/29d9cd46052073.58467b6d8b26b-e1542297883242.jpg" class="icon fa fa-pinterest-p"></button> -->

            </div>
        </div>
        <!--/MAIN BODY-->
        <script src="{{ asset('js/vivus.min.js') }}"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>

</x-layout>