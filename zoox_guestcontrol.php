<?php
$_SESSION['title'] ="GuestControl";
$_SESSION['description'] ="Facilidade e entretenimento para os hóspedes. Integração e controle para o seu hotel";
?>

<?php require_once('header.php'); ?>
        <link rel="shortcut icon" href="assets/img/guest/img-favicon-guest.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<?php require_once('header-bottom.php'); ?>






        <!-- Intro Section -->
        <section id="introBox" class="container-fluid intro-section-box intro-section-box-interna intro-section-box-guest" data-parallax="scroll" data-image-src="assets/img/guest/bg-guest.jpg">
            <div class="container container-intro container-intro-interna">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="logo-box logo-box-guest animated bounceInDown delay-one">
                            <img src="assets/img/guest/logo-guest-topo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="title-intro-box animated bounceInLeft delay-four">
                            <h2 class="title-strong">Facilidade e entretenimento para os hóspedes</h2>
                            <h2>Integração e controle para o seu hotel</h2>
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="btn-intro-box text-center animated bounceInUp delay-five">
                            <a class="btn btn-default btn-topo hvr-wobble-vertical" href="#nav" role="button">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Fixed navbar -->
        <div class="navbar navbar-custom navbar-static-top navbar-white" id="nav">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" ng-click="openAside('right', true)">
                  <span class="icon-bar icon-yellow"></span>
                  <span class="icon-bar icon-yellow"></span>
                  <span class="icon-bar icon-yellow"></span>
                </button>
                <a href="#contatoBox" class="contato-btn hidden-xs contato-yellow hvr-wobble-horizontal">Entre em contato</a>
                <a class="navbar-brand page-scroll logo-link large-logo" href="#page-top">
                    <img src="assets/img/guest/logo-menu-guest.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
                <a class="navbar-brand page-scroll logo-link scrolling-logo" href="#page-top">
                    <img src="assets/img/guest/logo-branco.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
              </div>
            </div>
        </div>

        <!-- Definicao Section -->
        <section id="wifiDefinicaoBox" class="container-fluid wifi-definicao-section-box box-cal-height">
            <div class="row center-align">
                <div class="col-xs-12 col-md-3 middle-content-gia-box middle-content-guest-box">
                    <div class="title-content-wifi-box middle-content-gia middle-content-guest">
                        <h1><span class="block-title">rentabilidade</span>
                        e facilidade<br>
                            <span class="title-light">
                            <span class="block-title">para o seu</span>
                            hotel
                            </span>
                        </h1>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="img-content-wifi-box">
                        <img src="assets/img/guest/macbook-guest.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 middle-content-gia-box middle-content-guest-box">
                    <div class="text-content-wifi-box middle-content-gia middle-content-guest">
                        <p>Com poucos cliques o hóspede poderá ter <span>o melhor do entretenimento no seu próprio dispositivo</span> ou na TV (Smart) e gerar uma nova receita para seu hotel. A Zoox possui acordo com as melhores distribuidoras de conteúdo.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Topicos Section -->
        <section id="giaTopicosBox" class="container-fluid guest-topicos-section-box box-cal-height-dois"> 
            <div class="middle-align">
                <div class="container-fluid hidden-xs hidden-sm">
                    <div class="row topicos-big topicos-big-guest">
                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/express.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Express Checkout</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Com poucos cliques, do seu próprio dispositivo, seu hóspede poderá realizar o check-out de dentro do apartamento.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/filmes.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Filmes</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Enquanto seu hóspede disfruta do melhor entretenimento no seu próprio dispositivo ou na TV do quarto, você cria uma nova oportunidade de receita para o seu hotel.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/concierge.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Concierge</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Cadastre pontos turísticos da cidade, passeios, eventos e muito mais. Ajude seu hóspede a ter uma ótima estadia, aproveitando cada experiência ao seu dispôr.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid hidden-xs hidden-sm">
                    <div class="row topicos-small topicos-small-guest">
                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/sac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Serviços</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Um menu de horários e telefones úteis na ponta dos dedos de seu hóspede.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/pesquisa.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Pesquisa</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Utilize a plataforma para realizar pesquisa de satisfação com seu cliente. É prático para ele e para o seu hotel, que recebe as respostas todas por e-mail.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/service.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Room Service</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>De qualquer lugar do hotel, seu hóspede pode realizar pedidos no Room Service. As refeições serão entregues onde quer que ele esteja.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row hidden-md hidden-lg">
                <div id="topicosSlider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators carousel-indicators-wifi">
                        <li data-target="#produtosSlider" data-slide-to="0" class="active"></li>
                        <li data-target="#produtosSlider" data-slide-to="1"></li>
                        <li data-target="#produtosSlider" data-slide-to="2"></li>
                        <li data-target="#produtosSlider" data-slide-to="3"></li>
                        <li data-target="#produtosSlider" data-slide-to="4"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/express.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Express Checkout</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Com poucos cliques, do seu próprio dispositivo, seu hóspede poderá realizar o check-out de dentro do apartamento.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/filmes.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Filmes</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Enquanto seu hóspede disfruta do melhor entretenimento no seu próprio dispositivo ou na TV do quarto, você cria uma nova oportunidade de receita para o seu hotel.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/concierge.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Concierge</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Cadastre pontos turísticos da cidade, passeios, eventos e muito mais. Ajude seu hóspede a ter uma ótima estadia, aproveitando cada experiência ao seu dispôr.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/sac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Serviços</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Um menu de horários e telefones úteis na ponta dos dedos de seu hóspede.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/pesquisa.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Pesquisa</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Utilize a plataforma para realizar pesquisa de satisfação com seu cliente. É prático para ele e para o seu hotel, que recebe as respostas todas por e-mail.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-guest">
                                <div class="img-topico-box">
                                    <img src="assets/img/guest/service.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Room Service</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>De qualquer lugar do hotel, seu hóspede pode realizar pedidos no Room Service. As refeições serão entregues onde quer que ele esteja.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

<?php require_once('footer.php'); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5289807-3', 'auto');
  ga('send', 'pageview');

</script>
