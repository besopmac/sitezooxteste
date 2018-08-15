<?php
$_SESSION['title'] ="Gia";
$_SESSION['description'] ="Informações e serviços relevantes para os hóspedes? Flexibilidade e customização para o seu hotel.";
?>

<?php require_once('header.php'); ?>
        <link rel="shortcut icon" href="assets/img/gia/img-favicon-gia.png" type="image/x-icon">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<?php require_once('header-bottom.php'); ?>

        <!-- Intro Section -->
        <section id="introBox" class="container-fluid intro-section-box intro-section-box-interna intro-section-box-gia" data-parallax="scroll" data-image-src="assets/img/gia/bg-gia.jpg">
            <div class="container container-intro container-intro-interna">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="logo-box logo-box-gia animated bounceInDown delay-one">
                            <img src="assets/img/gia/logo-gia-topo.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                        </div>
                    </div>

                    <div class="col-md-12 col-xs-12">
                        <div class="title-intro-box title-intro-box-small animated bounceInLeft delay-four">
                            <h2 class="title-strong">Informações e serviços relevantes para os hóspedes?</h2>
                            <h2>Flexibilidade e customização para o seu hotel.</h2>
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
                  <span class="icon-bar icon-green"></span>
                  <span class="icon-bar icon-green"></span>
                  <span class="icon-bar icon-green"></span>
                </button>
                <a href="#contatoBox" class="contato-btn hidden-xs contato-green hvr-wobble-horizontal">Entre em contato</a>
                <a class="navbar-brand page-scroll logo-link large-logo" href="#page-top">
                    <img src="assets/img/gia/logo-menu-gia.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
                <a class="navbar-brand page-scroll logo-link scrolling-logo" href="#page-top">
                    <img src="assets/img/gia/logo-branco.png" alt="Zoox Heavy Tecnology" class="img-responsive">
                </a>
              </div>
            </div>
        </div>

        <!-- Definicao Section -->
        <section id="wifiDefinicaoBox" class="container-fluid wifi-definicao-section-box box-cal-height">
            <div class="row center-align">
                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="title-content-wifi-box middle-content-gia">
                        <h1><span class="block-title">Dados</span>
                        <span class="block-title">relevantes</span> significam<br>
                            <span class="title-light">
                            <span class="block-title">insights</span>
                            <span class="block-title">valiosos para</span> 
                            o negócio</span>
                        </h1>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="img-content-wifi-box">
                        <img src="assets/img/gia/macbook.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                    </div>
                </div>

                <div class="col-xs-12 col-md-3 middle-content-gia-box">
                    <div class="text-content-wifi-box middle-content-gia">
                        <p>É a solução de gestão e tarifação de internet, além de proporcionar ao hotel a editar o GuestControl. Com ele, <span>não é necessário instalar nenhum software ou configurar nenhuma rede para ter acesso a internet. </span> É uma ferramenta que traz novas oportunidades de gerar receita para o seu hotel.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Topicos Section -->
        <section id="giaTopicosBox" class="container-fluid gia-topicos-section-box box-cal-height-dois"> 
            <div class="middle-align">
                <div class="row topicos-big hidden-xs hidden-sm">
                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/plug.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Plug & Use</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Sem necessidade de configuração ou instalação de software.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/sac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>SAC</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Suporte técnico telefônico para usuários finais.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/multi-user.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Multi-user</h5>
                            </div>

                            <div class="text-topico-box text-center">
                                <p>Possibilidade de criar login com dependentes compartilhados</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-3">
                        <div class="topicos">
                            <div class="img-topico-box">
                                <img src="assets/img/gia/firewall.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                            </div>

                            <div class="title-topico-box text-center">
                                <h5>Firewall</h5>
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
                                    <p>Integrado aos principais sistemas hoteleiros.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/mac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Funciona via MAC</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Sem necessidade de deixar programa aberto para funcioonamento.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-xs-12 col-md-4">
                            <div class="topicos topicos-small-intern">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/multidevice.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Multi-Device</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Funciona em tablets <br>e smartphones.</p>
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
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/plug.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Plug & Use</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Sem necessidade de configuração ou instalação de software.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/sac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>SAC</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Suporte técnico telefônico para usuários finais.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/multi-user.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Multi-user</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Possibilidade de criar login com dependentes compartilhados</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/firewall.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Firewall</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Segurança total de dados e privacidade para os usuários.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/integracao.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Integração</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Integrado aos principais sistemas hoteleiros.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/mac.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Funciona via MAC</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Sem necessidade de deixar programa aberto para funcioonamento.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="topicos topicos-gia">
                                <div class="img-topico-box">
                                    <img src="assets/img/gia/multidevice.png" alt="Zoox Heavy Tecnology" class="img-responsive center-block">
                                </div>

                                <div class="title-topico-box text-center">
                                    <h5>Multi-Device</h5>
                                </div>

                                <div class="text-topico-box text-center">
                                    <p>Funciona em tablets <br>e smartphones.</p>
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
