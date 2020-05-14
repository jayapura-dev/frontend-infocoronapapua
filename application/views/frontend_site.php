<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php echo $title ?></title>
    <!-- Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Landing page template for creative dashboard">
    <meta name="keywords" content="Landing page template">
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo base_url()?>assets\frontend\images\jdev2.png" type="image/png" sizes="16x32">
    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets\frontend\css\bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,700,600" rel="stylesheet" type="text/css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\owl.carousel.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\owl.theme.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\magnific-popup.css">
    <!-- Full Page Animation -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\animsition.min.css">
    <!-- Ionic Icons -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\frontend\css\ionicons.min.css">
    <!-- Main Style css -->
    <link href="<?php echo base_url()?>assets\frontend\css\style.css" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url()?>assets\frontend\css\card.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets\frontend\css\card2.css" rel="stylesheet" type="text/css">

    <!-- Leaflet css -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets\leaflet\leaflet.css" />

    
</head>

<body>

    <div class="wrapper animsition" data-animsition-in-class="fade-in" data-animsition-in-duration="1000" data-animsition-out-class="fade-out" data-animsition-out-duration="1000">
        <div class="container">
             <nav class="navbar navbar-expand-lg navbar-light navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <a class="navbar-brand page-scroll" href="<?php echo base_url()?>Home"><img src="<?php echo base_url()?>assets\frontend\images\jdev2.png" width="50px" alt="jayapuradev Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                        </ul>
                        <ul class="navbar-nav my-2 my-lg-0">
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="#main">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="<?php echo base_url()?>Home/hotline">HOTLINE</a>
                            </li>  
                            <li class="nav-item">
                                <a class="nav-link page-scroll" href="<?php echo base_url()?>Home/api">API For Developer</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="main" id="main">
            <!-- Main Section-->
            <?php echo $contents ?>
            <!-- Footer Section -->
            <div class="footer">
                <div class="container">
                    <div class="col-md-12 text-center">
                        <img src="<?php echo base_url()?>assets\frontend\images\jdev2.png" width="10%" alt="jayapuradev Logo">
                        <ul class="footer-menu">
                            <li><a href="https://github.com/Ekhel/KawalCoronaPapua/" target="_blank">Repositoty</a></li>
                            <li><a href="#">Gitter</a></li>
                        </ul>
                        <div class="footer-text">
                            <p>
                                Copyright © 2020 JAYAPURA DEV.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Scroll To Top -->
            <a id="back-top" class="back-to-top page-scroll" href="#main">
                <i class="ion-ios-arrow-thin-up"></i>
            </a>
            <!-- Scroll To Top Ends-->
        </div>
        <!-- Main Section -->
    </div>
    <!-- Wrapper-->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\jquery-2.1.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\plugins.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\menu.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\frontend\js\custom.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets\backend\pages\prism\custom-prism.js"></script>

    <!-- Leaflet -->
    <script type="text/javascript" src="<?php echo base_url()?>assets\leaflet\leaflet.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets\leaflet-providers\leaflet-providers.js"></script>
    <script type="text/javascript" src="https://rawgithub.com/ismyrnow/Leaflet.groupedlayercontrol/master/src/leaflet.groupedlayercontrol.js"></script>
</body>
</html>