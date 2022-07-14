<?php
include_once ("admin/includes/config.inc.php");
$con=mysqli_connect(HOST,USER,PWD,DATABASE);

function lastSpace($str){
    $num=strlen($str);
    while($num>0){
        $num--;
        if($str[$num]==' ')
            return($num);
    }
    return(-1);
}
function lastWord($str){
    $ind=lastSpace($str);
    return(substr($str,$ind+1));
}
function alteraNome($str){
    $parte1=substr($str,0,lastSpace($str));
    $parte2=lastWord($str);
    return($parte1."<p>".$parte2);
}
function idade($data){
    $timeStamp=strtotime($data);
    $ano=intval(date("Y",$timeStamp));
    $mes=date("m",$timeStamp);
    $dia=date("d",$timeStamp);
    $anoD=intval(date("Y"));
    $mesD=intval(date("m"));
    $diaD=intval(date("d"));
    return (($mes==$mesD && $dia <= $diaD)||($mes<$mesD)?$anoD-$ano:$anoD-$ano-1);
}

function isStop($char){
    switch ($char){
        case ' ':
        case ',':
        case '!':
        case '?':
        case ':':
$con=mysqli_connect(HOST,USER,PWD,DATABASE);
function isStop($char){
    switch ($char){
        case ' ':
        case ',':
        case '!':
        case '?':
        case ':':

function top(){
    ?>

    <!DOCTYPE html>
    <html>

    <!--  46:37  -->
    <head>
        <meta charset="utf-8">
        <title>Soccer Santos | Página Príncipal</title>
        <!-- Stylesheets -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
        <link rel="icon" href="images/favicon.png" type="image/x-icon">

        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

        <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    </head>
    <script>
        function myFunction() {

            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "flex";
            }
        }
    </script>
    <body>

    <div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header class="main-header">

        <!-- Header Top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="top-outer clearfix">

                    <!--Top Left-->
                    <div class="top-left">
                        <ul class="links clearfix">
                            <li><a href="tel:+351930583219"><span class="icon fa fa-phone"></span> 321654987  </a></li>
                            <li><a href="mailto:SoccerSantos@gmail.com"><span class="icon fa fa-envelope-o"></span>SoccerSantos@gmail.com</a></li>
                        </ul>
                    </div>

                    <!--Top Right-->
                    <div class="top-right clearfix">
                        <ul class="social-icon-one">
                            <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                            <li><a href="https://www.google.pt/?hl=pt-PT" class="fa fa-google-plus"></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- Header Top End -->

        <!--Header-Upper-->
        <div class="header-upper">
            <div class="auto-container">
                <div class="header-upper-inner clearfix">

                    <div class="pull-left logo-box">
                        <div class="logo"><a href="index.php"><img src="images/logo.png" alt="" title=""></a></div>
                    </div>

                    <div class="nav-outer clearfix">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="planteis.php">Planteis</a></li>
                                    <li><a href="galeria.php">Galeria</a></li>
                                    <li><a href="classificacao.php">Classificação do campeonato</a></li>
                                    <li><a href="noticias.php">Noticias</a></li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                    <!--Option Box
                     <div class="btn-box">
                         <a href="#" class="theme-btn btn-style-one">Ativar notificações</a>
                     </div>-->
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.php" class="img-responsive"><img src="images/logo-small.png" alt="" title=""></a>
                </div>

                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                <li><a href="planteis.php">Planteis</a></li>
                                <li><a href="galeria.php">Galeria</a></li>
                                <li><a href="classificacao.php">Classificação do campeonato</a></li>
                                <li><a href="noticias.php">Noticias</a></li>
                            </ul>
                        </div>

                    </nav>
                    <!-- Main Menu End-->
                </div>

            </div>
        </div>
        <!--End Sticky Header-->

    </header>
    <!--End Main Header -->
<?php
}
function bottom(){
    ?>
    <!--Clients Section-->
    <section class="clients-section" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">

            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                </ul>
            </div>

        </div>
    </section>
    <!--End Clients Section-->
    <!--Main Footer-->
    <!--Main Footer-->
    <footer class="main-footer">
        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Big Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index-2.html"><img src="images/footer-logo.png" alt="" /></a>
                                    </div>
                                    <!--<div class="text">This is Photoshop's version  of Lorem]psukroin gravida nibh vel velit auctor aliquet.Aenean sollicitudin, lorem quis bibendum auctor</div>
                                    --><ul class="social-icon-one">
                                        <li><a href="https://twitter.com/" class="fa fa-twitter"></a></li>
                                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                                        <li><a href="https://www.google.pt/?hl=pt-PT" class="fa fa-google-plus"></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                        </div>
                    </div>

                    <!--Big Column-->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!--Footer Column-->
                            <div class="footer-column col-md-6 col-sm-6 col-xs-12">
                                <div class="footer-widget footer-links">
                                    <h2>Links úteis</h2>
                                    <ul class="links">
                                        <li><a href="ClassiCampeonato.html">CLassificações</a></li>
                                        <li><a href="Planteis.html">Planteis</a></li>
                                        <li><a href="Noticias.html">Noticias</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!--Footer Column-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <!--Footer Bottom-->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="bottom-inner">
                <div class="row clearfix">

                    <!--Nav Column-->
                    <div class="nav-column col-lg-6 col-md-12 col-sm-12">
                        <ul class="footer-nav">
                            <li><a href="index._oldhtml">Home</a></li>
                            <li><a href="Planteis.html">Planteis</a></li>
                            <li><a href="galeria.html">Galeria</a></li>
                            <li><a href="ClassiCampeonato.html">Classificações</a></li>
                            <li><a href="Noticias.html">Noticias</a></li>
                        </ul>
                    </div>

                    <!--Copyright Column
                    <div class="copyright-column col-lg-6 col-md-12 col-sm-12">
                        <div class="copyright"><a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                    </div>
                    -->
                </div>
            </div>
        </div>
    </div>

    </footer>

    </div>
    <!--End pagewrapper-->

    <script src="js/jquery.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/jquery.fancybox.js"></script>
    <script src="js/appear.js"></script>
    <script src="js/owl.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery-ui.js"></script>
    <!--Google Map APi Key-->
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBg0VrLjLvDLSQdS7hw6OfZJmvHhtEV_sE"></script>
    <script src="js/map-script.js"></script>
    <!--End Google Map APi-->
    <script src="js/script.js"></script>

    </body>

    <!--  51:42  -->
    </html>
<?php
}