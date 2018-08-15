<?php require_once('header.php'); ?>
        <link rel="shortcut icon" href="assets/img/home/img-favicon-zoox.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<?php require_once('header-bottom.php'); ?>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal1">
  <div class="modal-dialog modal-lg" role="document">
    <iframe src="https://player.vimeo.com/video/181224210" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen controls autoplay></iframe>
  </div>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="modal2">
  <div class="modal-dialog modal-lg" role="document">
    <iframe src="https://player.vimeo.com/video/178525727" width="640" height="360" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" controls="" autoplay=""></iframe>
  </div>
</div>

        <!-- Intro Section -->
        <section id="introBox" class="container-fluid intro-section-box" data-parallax="scroll" data-image-src="assets/img/home/bg-header.jpg">
            <div class="row linguas">
                <div class="col-md-12 col-xs-12 text-right">
                    <ul class="idioma-list text-center">
                        <li class="topo-idioma">
                            <a href="http://www.zoox.com.br/english">En</a>
                        </li>
                        <li class="topo-idioma"> / </li>
                        <li class="topo-idioma">
                            <a href="http://www.zoox.com.br/espanol">Es</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="container container-intro">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="logo-box animated bounceInDown delay-one">
                            <img src="assets/img/home/logo-topo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                            <img src="assets/img/home/logo-topo-mobile.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-md hidden-lg">
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="title-intro-box animated bounceInLeft delay-four">
                            <h1>Guest technologies <br>and WiFi platform.</h1>
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="btn-intro-box text-center animated bounceInUp delay-five">
                            <a class="btn btn-default btn-topo hvr-wobble-vertical" href="#nav" role="button">Conheça os produtos</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fixed navbar -->
        <div class="navbar navbar-custom navbar-static-top" id="nav">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" ng-click="openAside('right', true)">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="#contatoBox" class="contato-btn hidden-xs hvr-wobble-horizontal">Entre em contato</a>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="assets/img/home/logo-menu.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
              </div>
            </div>
        </div>

        <!-- Produtos Section -->
        <section id="produtosBox" class="container-fluid produtos-section-box box-cal-height">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="title-box">
                            <h2>Produtos</h2>
                        </div>

                        <div class="text-produtos-box hidden-sm hidden-xs">
                            <p>Conheça nossas soluções para os segmentos <a href="javascript:{}" id="groupOne">Hospitality</a> e <a href="javascript:{}" id="groupTwo">Varejo/Telecom</a></p>
                        </div>

                        <div class="text-produtos-box hidden-lg hidden-md">
                            <p>Conheça nossas soluções para os segmentos <a href="javascript:{}">Hospitality</a> e <a href="javascript:{}">Varejo/Telecom</a></p>
                        </div>

                        <!-- <div class="links-filter-box center-block">
                            <ul class="links-filter">
                                <li class="link link-um active">
                                    <a href="javascript:{}">Todos</a>
                                </li>
                                <li class="link link-dois">
                                    <a href="javascript:{}">Varejo</a>
                                </li>
                                <li class="link link-tres">
                                    <a href="javascript:{}">Hospitality</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row hidden-xs hidden-sm">
                    <div class="col-xs-12 col-md-1 col-produtos"></div>

                    <a href="http://zoox.com.br/zooxcloud">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-two">
                            <div class="btn26 wifi-hover">
                                <img src="assets/img/home/cloud-wifi.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Plataforma  WhiteLabel para gestão e controle do WiFi para varejo e telecom.</p>
                                <a href="#" data-toggle="modal" data-target="#modal2">
                                    <div class="mbr-hero animated fadeInUp play">
                                        <div class="assista_button">Assista ao vídeo</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="http://zoox.com.br/zooxwifi/">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-two">
                            <div class="btn26 wifi-hover">
                                <img src="assets/img/home/wifi.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                   <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption">
                                <p>Sistema de controle de WiFi e mídia para pequenos estabelecimentos.</p>
                                <a href="#" data-toggle="modal" data-target="#modal1">
                                    <div class="mbr-hero animated fadeInUp play">
                                        <div class="assista_button">Assista ao vídeo</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="zoox_gia.php">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-one">
                            <div class="btn26 gia-hover">
                                <img src="assets/img/home/gia.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption prod">
                                <p>Plataforma completa de gestão de internet para hospitality e eventos.</p>
                            </div>
                        </div>
                    </div>
                    </a>

                    <a href="zoox_guestcontrol.php">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-one">
                            <div class="btn26 guest-hover">
                                <img src="assets/img/home/gest.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption prod">
                                <p>Facilidades e entretenimento para os hóspedes. Controle para o seu hotel.</p>
                            </div>
                        </div>
                    </div>
                    </a>


                    <a href="zoox_smartcheckin.php">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-one">
                            <div class="btn26 smart-hover">
                                <img src="assets/img/home/smart.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption prod">
                                <p>Conforto para os hóspedes. Otimização do processo de check-in para o seu hotel.</p>
                            </div>
                        </div>
                    </div>
                    <a/>

                    <div class="col-xs-12 col-md-1 col-produtos"></div>
                    <!--
                    <a href="zoox_magoo.php">
                    <div class="col-xs-12 col-md-2 col-produtos">
                        <div class="thumbnail produtos group-one">
                            <div class="btn26 magoo-hover">
                                <img src="assets/img/home/magoo.png" alt="Zoox Heavy Tecnology">
                                <div class="ovrly"></div>
                                <div class="buttons">
                                    <div class="fa fa-link"></div>
                                </div>
                            </div>
                            <div class="caption prod">
                                <p>Agilidade para camareiras e hóspedes. Controle absoluto de quartos para seu hotel.</p>
                            </div>
                        </div>
                    </div>
                    </a>-->
                </div>

                <div class="row hidden-md hidden-lg">
                    <div id="produtosSlider" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#produtosSlider" data-slide-to="0" class="active"></li>
                            <li data-target="#produtosSlider" data-slide-to="1"></li>
                            <li data-target="#produtosSlider" data-slide-to="2"></li>
                            <li data-target="#produtosSlider" data-slide-to="3"></li>
                            <li data-target="#produtosSlider" data-slide-to="4"></li>
                            <!--<li data-target="#produtosSlider" data-slide-to="5"></li>-->
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/wifi.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                       <p>Sistema de controle de WiFi e mídia para pequenos estabelecimentos.</p>
                                       <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <div class="mbr-hero animated fadeInUp play">
                                                <div class="assista_button">Assista ao vídeo</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/gia.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                        <p>Plataforma completa de gestão de internet para hospitality e eventos.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/gest.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                        <p>Facilidades e entretenimento para os hóspedes. Controle para o seu hotel.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/smart.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                        <p>Conforto para os hóspedes. Otimização do processo de check-in para o seu hotel.</p>
                                    </div>
                                </div>
                            </div>
                            <!--
                            <div class="item">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/magoo.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                        <p>Agilidade para camareiras e hóspedes. Controle absoluto de quartos para seu hotel.</p>
                                    </div>
                                </div>
                            </div>-->
                            <div class="item">
                                <div class="thumbnail produtos">
                                    <img src="assets/img/home/cloud-wifi.png" alt="Zoox Heavy Tecnology">
                                    <div class="caption">
                                        <p>Plataforma  WhiteLabel para gestão e controle do WiFi para varejo e telecom.</p>
                                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-lg">
                                            <div class="mbr-hero animated fadeInUp play">
                                                <div class="assista_button">Assista ao vídeo</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Linha do tempo Section -->
        <section id="timelineBox" class="container-fluid timeline-section-box box-cal-height-dois">
            <!--<div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="title-box title-box-timline">
                            <h2>Base sólida <span>e ascensão meteórica.</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row hidden-xs hidden-sm">
                    <div class="col-xs-12 col-md-12">
                        <div class="center-timeline-box" data-950="top:100%; opacity:0;" data-2400="top:36%;" data-2600="display:block; opacity:1" data-5200="top:36%; position:fixed; opacity:1" data-5300="display:none; opacity:0">
                            <img src="assets/img/home/center-time.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                        </div>
                    </div>
                </div>

                <div class="row timeline hidden-xs hidden-sm">
                    <div class="col-xs-12 col-md-12 box-timeline-info timline-primeiro">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right"></div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2004</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center" data-center-top="opacity:0; transform: translate3d(0px, 105px, 0px);" data-center="opacity:1; transform: translate3d(0px, 55px, 0px);">
                                    <p>A  Zoox é criada para desenvolver soluções em tecnologia para hotéis.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timeline-segundo">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right text-center" data-center-top="opacity:0; transform: translate3d(0px, 105px, 0px);" data-center="opacity:1; transform: translate3d(0px, 65px, 0px);">
                                    <p>Primeira rodada de investimentos, no qual vende 50% de suas ações.</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2006</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timeline-terceiro">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right"></div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2008</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center" data-center-top="opacity:0; transform: translate3d(0px, 105px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>A Zoox ganha seu primeiro destaque. Torna-se líder no mercado carioca.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timeline-quarto">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right text-center" data-center-top="opacity:0; transform: translate3d(0px, 105px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>Primeira instalação fora do país. Zoox vai para Paraguai.</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2010</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timline-quinto">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right"></div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2012</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center" data-center-top="opacity:0; transform: translate3d(0px, 125px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>Zoox lança o seu sistema de Vídeo On Demand para qualquer dispositivo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timline-sexto">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right text-center" data-center-top="opacity:0; transform: translate3d(0px, 125px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>Lançamos o primeiro sistema de Check-in para hotéis do Brasil.</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2013</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timline-setimo">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right text-center">
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2014</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left text-center" data-center-top="opacity:0; transform: translate3d(0px, 105px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>Zoox amplia seu mercado<br> para o varejo.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-12 box-timeline-info timline-ultimo">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="text-right text-center" data-center-top="opacity:0; transform: translate3d(0px, 125px, 0px);" data-center="opacity:1; transform: translate3d(0px, 60px, 0px);">
                                    <p>Novo escritório em Portugal.</p>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="year-box text-center" data-bottom-top="opacity:0;font-size:100%; display:none;" data-center-top="opacity:1;font-size:150%; display:block; position:fixed; left:0; right:0;" data-150-top="opacity:0;">
                                    <h2>2015</h2>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="text-left">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row hidden-md hidden-lg timeline-mobile">
                    <div class="col-xs-12">
                        <img src="assets/img/home/timeline.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                    </div>
                </div>
            </div>-->
        </section>


        <!-- Numeros Section -->
        <section id="numerosBox" class="container-fluid numeros-section-box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="title-box">
                            <h2>Números <span>Não mentem.</span></h2>
                        </div>
                    </div>
                </div>

                <div class="row hidden-xs hidden-sm">
                    <div class="grupo-numeros grupo-um">
                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/suporte.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="estatistica1 valor-box text-center">
                                <h1>28K</h1>
                            </div>

                            <div class="text-valor-box text-center" style="margin-top: -11px;">
                                <p>Conexões em Tempo Real</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/hoteis.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="valor-box text-center">
                                <h1>700<span>+</span></h1>
                            </div>

                            <div class="text-valor-box text-center">
                                <p>Clientes implantados</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/points.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="valor-box text-center">
                                <h1>10<span>mil</span></h1>
                            </div>

                            <div class="text-valor-box text-center">
                                <p>Access Points</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row hidden-xs hidden-sm">
                    <div class="grupo-numeros grupo-dois">
                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/conexao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="valor-box text-center">
                                <h1>6<span>MM</span></h1>
                            </div>

                            <div class="text-valor-box text-center">
                                <p>Conexões Mensais</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/grafico.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="valor-box text-center">
                                <h1>99,9%</h1>
                            </div>

                            <div class="text-valor-box text-center">
                                <p>Sucesso de conexões</p>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="img-numero-box">
                                <img src="assets/img/home/fidelizacao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="valor-box text-center">
                                <h1>94,7%</h1>
                            </div>

                            <div class="text-valor-box text-center">
                                <p>Fidelização de Clientes</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row hidden-md hidden-lg numeros-mobile">
                <div id="numerosSlider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#numerosSlider" data-slide-to="0" class="active"></li>
                        <li data-target="#numerosSlider" data-slide-to="1"></li>
                        <li data-target="#numerosSlider" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="top">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/hoteis.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>550<span>+</span></h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Clientes</p>
                                </div>
                            </div>

                            <div class="bottom">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/conexao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>6<span>MM</span></h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Conexões Mensais</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/points.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>10<span>mil</span></h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Access Points</p>
                                </div>
                            </div>

                            <div class="bottom">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/grafico.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>99,9%</h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Sucesso de conexões</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="top">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/suporte.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>24/7</h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Suporte</p>
                                </div>
                            </div>

                            <div class="bottom">
                                <div class="img-numero-box">
                                    <img src="assets/img/home/fidelizacao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="valor-box text-center">
                                    <h1>94,7%</h1>
                                </div>

                                <div class="text-valor-box text-center">
                                    <p>Fidelização de Clientes</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>


        <!-- Dedicaçao Section -->
        <section id="dedicacaoBox" class="container-fluid dedicacao-section-box">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="title-box">
                            <h2>Dedicação <span>gera confiança.</span></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hidden-xs hidden-sm">
                <div class="col-xs-12 col-md-12">
                    <div class="clientes-list-box">
                        <ul class="clients-list clients-list-one">
                            <li class="client">
                               <img src="assets/img/home/accor.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/bluetree-hotels.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/atlantica-hotels.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/windsor-hotels.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/intercity.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/aerobrasilia.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                        </ul>

                        <ul class="clients-list clients-list-two">
                            <li class="client">
                                <img src="assets/img/home/hoteis-othon.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/ihg.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/slaviero-hoteis.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/costadosauipe.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/summerville.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/vilamix.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                        </ul>

                        <ul class="clients-list clients-list-three">
                            <li class="client">
                                <img src="assets/img/home/trump.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/sheraton.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/bourbon.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/hotel-gran.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/bhg.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/riogaleao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                        </ul>

                        <ul class="clients-list clients-list-four">
                            <li class="client">
                                <img src="assets/img/home/oi.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/saphyr.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/ipiranga.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/hyundai.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/telefonica.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                            <li class="client">
                                <img src="assets/img/home/fasano.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row hidden-md hidden-lg timeline-mobile">
                <div class="col-xs-12">
                    <img src="assets/img/home/clientes-mobile.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-2 hidden-xs hidden-sm"></div>
                    <div class="col-xs-12 col-md-8">
                        <div id="depoimentoSlider" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#depoimentoSlider" data-slide-to="0" class="active"></li>
                                <li data-target="#depoimentoSlider" data-slide-to="1"></li>
                                <li data-target="#depoimentoSlider" data-slide-to="2"></li>
                                <li data-target="#depoimentoSlider" data-slide-to="3"></li>
                                <li data-target="#depoimentoSlider" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active" style="min-height: 500px;">
                                    <img src="assets/img/home/slider.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                                    <div class="carousel-caption">
                                        <h3>“Após a implantação do Zoox Connect, tivemos uma grande queda nos índices de reclamação da internet.”</h3>
                                        <p>Tiago Dutra, Diretor de TI da rede de Hoteis Bourbon | Produto: GIA e GuestControl</p>
                                    </div>
                                </div>
                                <div class="item" style="min-height: 500px;">
                                    <img src="assets/img/home/slider.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                                    <div class="carousel-caption">
                                        <h3>“Fizemos uma excelente escolha em utilizar a plataforma Zoox para a gestão de WiFi de hóspedes e eventos dos hotéis Unique. Além de ter uma interface bastante amigável em Cloud, integrada ao sistema hoteleiro, consigo consolidar nossos hotéis em um único Dashboard e controlar de qualquer lugar o comportamento do WiFi em tempo real.”</h3>
                                        <p>Gustavo Kronemberger, Gerente de TI do Hotel Unique | Produto: GIA e GuestControl</p>
                                    </div>
                                </div>
                                <div class="item" style="min-height: 500px;">
                                    <img src="assets/img/home/slider.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                                    <div class="carousel-caption">
                                        <h3>“A Zoox me passou muita confiança desde o início. O seu sistema e programa de WiFi são totalmente estáveis, além de um 0800 de qualidade, 24 horas por dia. O serviço prestado está atendendo a todos os padrões de exigência da rede Windsor”</h3>
                                        <p>Rudolf, Gerente de TI dos Hotéis Windsor | Produto: Zoox WiFi</p>
                                    </div>
                                </div>
                                <div class="item" style="min-height: 500px;">
                                    <img src="assets/img/home/slider.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                                    <div class="carousel-caption">
                                        <h3>“Com o Zoox WiFi, conseguimos consolidar as informações dos nossos clientes e fazer toda a gestão do WiFi através de uma plataforma amigável e consolidada. Para o usuário, a autenticação é bem fácil, pois ele é reconhecido automaticamente pelo o software sem a necessidade de nova autenticação.”</h3>
                                        <p>Gerente de TI - Parque Aquático Thermas dos Laranjais | Produto: Zoox WiFi</p>
                                    </div>
                                </div>
                                <div class="item" style="min-height: 500px;">
                                    <img src="assets/img/home/slider.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block hidden-xs hidden-sm">
                                    <div class="carousel-caption">
                                        <h3>“Após a implantação da solução Zoox WiFi no Villa Mix São Paulo, conseguimos melhorar a experiência do nosso cliente no acesso a rede WiFi, além de poder ter as informações sobre eles através do cadastro, e com isso, melhoramos nosso canal de comunicação.”</h3>
                                        <p>Gerente de Marketing Villa Mix São Paulo | Produto: Zoox WiFi</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 hidden-xs hidden-sm"></div>
                </div>
            </div>
        </section>

<?php require_once('footer.php'); ?>


<script>
   $(function() {
       window.conectados = function (data) {
           $('.estatistica1').html(data)
       };
       var src = 'http://dev.zooxconnect.com.br/acessos/conectados.json';
       var script = document.createElement('script');
       script.src = src;
       document.body.appendChild(script);
   });
</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5289807-3', 'auto');
  ga('send', 'pageview');

</script>
