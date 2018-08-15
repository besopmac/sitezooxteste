<?php
$_SESSION['title'] ="MaGoo";
$_SESSION['description'] ="Agilidade para camareira e hóspedes. Controle absoluto de quarto para o seu hotel";
?>

<?php require_once('header.php'); ?>
        <link rel="shortcut icon" href="assets/img/magoo/img-favicon-magoo.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<?php require_once('header-bottom.php'); ?>

        <!-- Intro Section -->
        <section id="introBox" class="container-fluid intro-section-box intro-section-box-interna intro-section-box-magoo" data-parallax="scroll" data-image-src="assets/img/magoo/bg-magoo.jpg">
            <div class="container container-intro container-intro-interna">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="logo-box logo-box-magoo animated bounceInDown delay-one">
                            <img src="assets/img/magoo/logo-topo-magoo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="title-intro-box title-intro-box-small animated bounceInLeft delay-four">
                            <h2 class="title-strong">Agilidade para camareira e hóspedes</h2>
                            <h2>Controle absoluto de quarto para o seu hotel</h2>
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
                  <span class="icon-bar icon-dark-green"></span>
                  <span class="icon-bar icon-dark-green"></span>
                  <span class="icon-bar icon-dark-green"></span>
                </button>
                <a href="#contatoBox" class="contato-btn hidden-xs contato-dark-green hvr-wobble-horizontal">Entre em contato</a>
                <a class="navbar-brand page-scroll logo-link large-logo" href="#page-top">
                    <img src="assets/img/magoo/logo-menu-magoo.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
                <a class="navbar-brand page-scroll logo-link scrolling-logo" href="#page-top">
                    <img src="assets/img/magoo/logo-branco.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
              </div>
            </div>
        </div>

        <!-- Definicao Section -->
        <section id="wifiDefinicaoBox" class="container-fluid wifi-definicao-section-box box-cal-height">
            <div class="row center-align">
                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="title-content-wifi-box middle-content-gia middle-content-magoo">
                        <h1><span class="block-title">controle</span>
                        <span class="block-title">absoluto</span> do hotel<br>
                            <span class="title-light">
                            <span class="block-title">facilidade</span>
                            <span class="block-title">para a</span> 
                            camareira</span>
                        </h1>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="img-content-wifi-box">
                        <img src="assets/img/magoo/ipad-magoo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="text-content-wifi-box middle-content-gia middle-content-smart middle-content-magoo">
                        <p>Sua camareira irá controlar com facilidade a arrumação dos quartos com a interface intuitiva do MaGoo. Além disso, a gerência poderá<span> monitorar, gerar relatórios e alterar os compromissos diários.</span></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Topicos Section -->
        <section id="giaTopicosBox" class="container-fluid magoo-topicos-section-box box-cal-height-dois"> 
            <div class="middle-align">
                <div class="container-fluid hidden-xs hidden-sm">
                    <div class="row topicos-big topicos-big-guest">
                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/relatorio.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Relatório de Produtividade</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Gere relatórios de produtividade com facilidade para cada funcionário</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Tabulação</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Faça a tabulação de todos os dados inseridos e gerados</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/integracao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Alteração de Roteiro</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Altere o diário de trabalho rapidamente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid hidden-xs hidden-sm">
                    <div class="row topicos-small topicos-small-magoo">
                        <div class="col-xs-12 col-md-6">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/magoo/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Manutenção</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Equilibre a manutenção com ajustes<br> rápidos e precisos</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-6">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/dashboard.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Software de Gestão Web</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Programa on-line para gerir a<br> distância</p>
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
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/relatorio.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Relatório de Produtividade</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Gere relatórios de produtividade com facilidade para cada funcionário</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Tabulação</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Faça a tabulação de todos os dados inseridos e gerados</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/integracao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Alteração de Roteiro</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Altere o diário de trabalho rapidamente</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/magoo/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Manutenção</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Equilibre a manutenção com ajustes<br> rápidos e precisos</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/dashboard.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Software de Gestão Web</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Programa on-line para gerir a<br> distância</p>
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
