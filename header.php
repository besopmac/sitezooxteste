<?php
if (!isset($_SESSION['description'])){

$_SESSION['description'] ="Soluções de tecnologia para os segmentos Hospitality e Varejo/Telecom.";
}

if (!isset($_SESSION['title'])){

$_SESSION['title'] ="Zoox";
}
?>

<script>
    var _ttq = _ttq || [];
    _ttq.push(["_setAccount", "TT-12568-7"]);
    (function () {
        var ts = document.createElement("script");
        ts.type = "text/javascript";
        ts.async = true;
        ts.src = ("https:" == document.location.protocol ? "https://" : "http://") + "d.tailtarget.com/base.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(ts, s);
    })();
</script>

<!doctype html>
<html class="no-js no-skrollr" lang="" ng-app="asideApp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $_SESSION['title']; ?></title>
        <meta name="description" content="<?php echo $_SESSION['description']; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="google-site-verification" content="bktT_3xVLRTB0MyPMnyX1D19ecwNLUCPxElU4CktS7k" />
        
        <meta property="og:url" content="http://www.zoox.com.br" />
        
        <meta property="og:title" content="Zoox. Heavy Technology for a Lighter Life." />
        <meta property="og:description" content="Soluções de tecnologia para os segmentos Hospitality e Varejo/Telecom." />
        <meta property="og:image"content="http://zoox.com.br/assets/img/zoox-og-img.png" />

        <!--
        <link rel="stylesheet" href="assets/css/scss/angular-aside.min.css">
        <link rel="stylesheet" href="assets/css/scss/animate.min.css">
        <link rel="stylesheet" href="assets/css/scss/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/scss/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/scss/main.css">
        <link rel="stylesheet" href="assets/css/scss/medias.css">
        <link rel="stylesheet" href="assets/css/scss/normalize.css">-->
        <link rel="stylesheet" href="assets/css/scss/estilos.scss">
    </head>