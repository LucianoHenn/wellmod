<x-layout>
    <style>
        .faq {
            background-color: white !important;
            -webkit-box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
            box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
        }
    </style>
    <!--MAIN BODY-->
    <div class="top-banner big light vindow-height">
        <span class="overlay"></span>
        <img src="https://wellmod.com.ar/wp-content/uploads/2020/08/Slide2.jpg" class="s-img-switch" alt="banner image" />
        <div class="content">
            <div class="subtitle">¿TENES ALGUNA DUDA? </div>
            <h1 class="title">Mira las preguntas frecuentes</h1>
        </div>
    </div>



    <section class="accordion-section  margin-lg-75b margin-sm-30b margin-md-50b  clearfix container padd-only-xs margin-xs-20t margin-md-80t margin-lg-120t" aria-label="Question Accordions">
        <div class="container">

            <h3 class="text-center">Preguntas Frecuentes</h3>
            <p class="text-center  margin-lg-75b margin-sm-30b margin-md-50b ">Otros usuarios antes de tener sus módulos tuvieron algunas consultas como las siguientes:</p>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3 " role="tab" id="heading0">
                        <h3 class="panel-title ">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">
                                ¿Son contenedores reciclados?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse0" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
                        <div class="panel-body px-3 mb-4">
                            <p>No, no son contenedores reciclados.</p>
                            <p>Son modulos cuya estructura interna se realiza desde cero y miden 3.20 x 6.30m y x 3 m de altura externa</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading1">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                ¿Que equipamiento esta incluido?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                        <div class="panel-body px-3 mb-4">
                            <p>BEl equipamiento interior inlcuido es el que lleva instalacion y esta conformado por muebles de cocina y placares de habitaciones y de servicios.</p>
                            <p>Para mas informacion ver en la seccion catalogo, cada modelo y descripcion de lo que incluye.</p>
                            <p>Ofrecemos la posibilidad tambien, de ambiantarlo y equiparlo completamente</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading2">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                ¿Como es la forma de pago?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                        <div class="panel-body px-3 mb-4">
                            <p>Anticipo del 65 %, al contratar y saldo en cuotas de acuerdo al tiempo estimado de construcción</p>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading p-3 mb-3" role="tab" id="heading3">
                        <h3 class="panel-title">
                            <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                ¿En cuanto tiempo puedo tener una unidad instalada y funcionando?
                            </a>
                        </h3>
                    </div>
                    <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                        <div class="panel-body px-3 mb-4">
                            <p>El tiempo de construcción en fabrica es de 90 a 120 días y la puedes tener instalada en 48/96 horas, según modelo y ubicación, luego de que se hayan ejecutado las obras complementarias detalladas en cada terreno, más el plazo de fabricación.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="row mt-3 margin-lg-50t margin-sm-30t margin-md-40t">
            <div class="col-sm-12 text-center">
                <p>¿Seguis con dudas?</p>

                <button class="load-btn a-btn-2 creative js-load-more-btn">
                    <span class="a-btn-line load"></span>
                    CONTACTANOS </button>

            </div>
        </div>
    </section>





    <!--/MAIN BODY-->
    <script>
        $(document).ready(function() {
            // Add a click event handler to the button
            $(".js-load-more-btn").click(function() {
                // Redirect to the "/contacto" page
                window.location.href = "/contacto";
            });
        });
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</x-layout>