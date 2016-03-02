<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Wedding Factory</title>  
    <meta name="description" content="Sailor is a Creative and Unique Corporate and Portfolio Web Template">
    <meta name="keywords" content="portfolio, creative, corporate, responsive, bootstrap">
    <meta name="author" content="JLT Media/ThemeForces">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">

    <!-- Other Css Files
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" href="assets/css/animate.css">       
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css"> 

    <!-- Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

    <!-- Modernizr
    ================================================== -->
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script type="text/javascript" src="js/Gallery.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-target=".navbar-example">

    <!-- Off Canvas Navigation
    ================================================== -->
   <div class="navbar navbar-default navbar-fixed-top menu-top2" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                                              
                    </div>
                    <div class="navbar-collapse collapse navbar-centered ">
                                               <ul class="nav navbar-nav" >
                                                   <li><a href="index.html" class="Montserrat-Regular">Inicio</a></li>
                                                   <li><a href="quienes_somos.html" class="Montserrat-Regular">Quiénes Somos</a></li>
                                                   <li><a href="index.html#services" class="Montserrat-Regular">Servicios</a></li>
                                                   <li><a href="#works" class="Montserrat-Regular">Galería</a></li>
                                                   <li><a href="index.html#contact" class="Montserrat-Regular">Contacto</a></li>
                                               </ul>
                                           </div> 
                </div><!--- END CONTAINER -->
            </div> 


    <!-- Hero Slider
    ================================================== -->
    <!-- Portfolio Section
    ================================================== -->
    <section id="portfolio" style="padding-top: 80px;"> 
        <div class="container-fluid"> <!-- Start Container -->
            <div class="row"> <!-- Start Row -->
                <?php
                    include "api.php";
                        $json = json_decode($json2, true); 
                        foreach ($json['images'] as $value) {
                        $path = $value['path'];
                        $tittle = $value['tittle'];
                        $short_description = $value['short_description'];
                        $img_details = json_encode($value);
                        $RequestText = urlencode($img_details);
                ?>
                    <div class="col-sm-4 col-md-4 col-lg-4 nopadding"> <!-- First Column -->
                        <div class="small-box">
                            <div class="hover-bg">
                                <img src="<?php echo $path; ?>" alt="img" class="img-responsive img-standar">
                                <div class="hover-text animated">
                                    <div class="ptitle">
                                        <a href="<?php echo $path; ?>" title="<?php echo $tittle; ?>" data-lightbox-gallery="gallery1"><h2><?php echo $tittle; ?></h2></a>
                                    </div>
                                    <p class="excerpt"><?php echo $short_description; ?> </p>
                                    <a href="<?php echo $path; ?>" class="btn btn-default read-more-btn" title="<?php echo $tittle; ?>" data-lightbox-gallery="gallery1"><span class="fa fa-bars"></span>Ver más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                ?>
            </div> <!-- End Row -->
        </div> <!-- End Container -->
        <div class="clearfix"></div>
    </section>

    <footer class="footer" style="background-color: #555e5d">
            <div class="container">
                <div class="row center-block">
                    <div class="col-md-12 text-center ">
                       <div class="footer-copyright wow fadeInUp " data-wow-duration="1s" data-wow-delay="0.6s" data-wow-offset="0">
                                                <div class="col-sm-7">
                                                    <div class="form-group col-sm-6 "></div>
                                                    <a href="index.html"><img src="img/logo_2.png" style="height: 140px;float: right;" class="logo-footer"></a>
                                                </div>
                                               <div class=" form-group col-sm-5 center-block img-footer" style="text-align: left;margin-top: 50px;" >
                                                      <h4 style="color: #fff;margin-bottom:-4px" class="center-block Avenir-Roman siguenos">Síguenos en:</h4>
                                                    <img src="img/facebook.png" style="height: 67px;margin-left:-16px;margin-right:-26px" >
                                                    <img src="img/instagram.png" style="height: 67px;margin-right: -26px;" >
                                                    <img src="img/twitter.png" style="height: 67px;">     
                                                </div>
                                            </div> 
                    </div>
                        
                </div>
            </div>    
    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    ================================================== -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Other JS Files -->
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script type="text/javascript" src="js/nivo-lightbox.js"></script>

    <!-- Contact page-->

    <!-- Custom Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>

  </body>
</html>