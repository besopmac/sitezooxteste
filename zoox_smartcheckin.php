<?php
$_SESSION['title'] ="Smart Check-in";
$_SESSION['description'] ="Conforto para os hóspedes. Otimização do processo de check-in para o seu hotel.";
?>

<?php require_once('header.php'); ?>
        <link rel="shortcut icon" href="assets/img/smart/img-favicon-smart.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<?php require_once('header-bottom.php'); ?>

        <!-- Intro Section -->
        <section id="introBox" class="container-fluid intro-section-box intro-section-box-interna intro-section-box-smart" data-parallax="scroll" data-image-src="assets/img/smart/bg-smart.jpg">
            <div class="container container-intro container-intro-interna">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="logo-box logo-box-guest animated bounceInDown delay-one">
                            <img src="assets/img/smart/logo-smart-topo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="title-intro-box title-intro-box-small animated bounceInLeft delay-four">
                            <h2 class="title-strong">Conforto para os hóspedes.</h2>
                            <h2>Otimização do processo de check-in para o seu hotel.</h2>
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
                  <span class="icon-bar icon-blue"></span>
                  <span class="icon-bar icon-blue"></span>
                  <span class="icon-bar icon-blue"></span>
                </button>
                <a href="#contatoBox" class="contato-btn hidden-xs contato-blue hvr-wobble-horizontal">Entre em contato</a>
                <a class="navbar-brand page-scroll logo-link large-logo" href="#page-top">
                    <img src="assets/img/smart/logo-menu-smart.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
                <a class="navbar-brand page-scroll logo-link scrolling-logo" href="#page-top">
                    <img src="assets/img/smart/logo-branco.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
              </div>
            </div>
        </div>

        <!-- Definicao Section -->
        <section id="wifiDefinicaoBox" class="container-fluid wifi-definicao-section-box box-cal-height">
            <div class="row center-align">
                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="title-content-wifi-box middle-content-gia">
                        <h1><span class="block-title">conveniência</span>
                        <span class="block-title">para o seu</span> hóspede<br>
                            <span class="title-light">
                            <span class="block-title">mais negócios</span>
                            <span class="block-title">para o seu</span> 
                            hotel</span>
                        </h1>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="img-content-wifi-box">
                        <img src="assets/img/smart/macbook-smart.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="text-content-wifi-box middle-content-gia middle-content-smart">
                        <p>Seu hóspede agora pode realizar o<span> Check-In antecipado</span>, proporcionando maior conforto antes mesmo dele chegar ao hotel, totalmente integrado aos principais PMS.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Topicos Section -->
        <section id="giaTopicosBox" class="container-fluid smart-topicos-section-box box-cal-height-dois"> 
            <div class="middle-align">
                <div class="row topicos-big hidden-xs hidden-sm">
                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/multidevice.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Layout Personalizado</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Sua identidade visual <br>para dentro do aplicativo.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/smart/relatorio.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Relatórios</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Todo o detalhamento histórico em um só documento.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/smart/dashboard.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Dashboard</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Monitore em tempo real todo o status de Check-In do seu hotel.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/firewall.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Segurança</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Segurança total de dados e privacidade para os usuários.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid hidden-xs hidden-sm">
                    <div class="row topicos-small">
                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/integracao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Integração</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Sistema integrado que melhora o monitoramento em tempo real.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Permissão</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Controle todo o acesso <br>em um só lugar.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/recebimento.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Recebimento</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Assegure a reserva do seu hóspede e o recebimento do seu hotel.</p>
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
	                                <img src="assets/img/gia/multidevice.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
	                            </div>

	                            <div class="title-topico-box text-center">
	                                <h5>Layout Personalizado</h5>
	                            </div>

	                            <div class="text-topico-box text-center">
	                                <p>Sua identidade visual <br>para dentro do aplicativo.</p>
	                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
	                                <img src="assets/img/smart/relatorio.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
	                            </div>

	                            <div class="title-topico-box text-center">
	                                <h5>Relatórios</h5>
	                            </div>

	                            <div class="text-topico-box text-center">
	                                <p>Todo o detalhamento histórico em um só documento.</p>
	                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
	                                <img src="assets/img/smart/dashboard.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
	                            </div>

	                            <div class="title-topico-box text-center">
	                                <h5>Dashboard</h5>
	                            </div>

	                            <div class="text-topico-box text-center">
	                                <p>Monitore em tempo real todo o status de Check-In do seu hotel.</p>
	                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
	                                <img src="assets/img/gia/firewall.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
	                            </div>

	                            <div class="title-topico-box text-center">
	                                <h5>Segurança</h5>
	                            </div>

	                            <div class="text-topico-box text-center">
	                                <p>Segurança total de dados e privacidade para os usuários.</p>
	                            </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/integracao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Integração</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Sistema integrado que melhora o monitoramento em tempo real.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/controle.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Permissão</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Controle todo o acesso <br>em um só lugar.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-smart">
                                <div class="img-topico-box">
                                    <img src="assets/img/smart/recebimento.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Controle de Recebimento</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Assegure a reserva do seu hóspede e o recebimento do seu hotel.</p>
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
