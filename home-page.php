

<?php

session_start();


?>


<!DOCTYPE html>
<html lang="en">


<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    <!-- ========== Page Title ========== -->
    <title>Living Benefits</title>

  

    <!-- ========== Start Stylesheet ========== -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/fonts/css/all.css">
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- ========== End Stylesheet ========== -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5/html5shiv.min.js"></script>
      <script src="assets/js/html5/respond.min.js"></script>
    <![endif]-->

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    
     <script src="assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="assets/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,$Zoom:1,$Easing:{$Zoom:$Jease$.$InCubic,$Opacity:$Jease$.$OutQuad},$Opacity:2},
              {$Duration:1000,$Zoom:11,$SlideOut:true,$Easing:{$Zoom:$Jease$.$InExpo,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 14,
                $SpacingY: 12,
                $Orientation: 2,
                $Align: 0
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 960;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider arrow skin 093 css*/
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}

        /*jssor slider thumbnail skin 101 css*/
        .jssort101 .p {position: absolute;top:0;left:0;box-sizing:border-box;background:#000;}
        .jssort101 .p .cv {position:relative;top:0;left:0;width:100%;height:100%;border:2px solid #000;box-sizing:border-box;z-index:1;}
        .jssort101 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;visibility:hidden;}
        .jssort101 .p:hover .cv, .jssort101 .p.pdn .cv {border:none;border-color:transparent;}
        .jssort101 .p:hover{padding:2px;}
        .jssort101 .p:hover .cv {background-color:rgba(0,0,0,6);opacity:.35;}
        .jssort101 .p:hover.pdn{padding:0;}
        .jssort101 .p:hover.pdn .cv {border:2px solid #fff;background:none;opacity:.35;}
        .jssort101 .pav .cv {border-color:#fff;opacity:.35;}
        .jssort101 .pav .a, .jssort101 .p:hover .a {visibility:visible;}
        .jssort101 .t {position:absolute;top:0;left:0;width:100%;height:100%;border:none;opacity:.6;}
        .jssort101 .pav .t, .jssort101 .p:hover .t{opacity:1;}
    </style>
    

</head>

<body>

   
  <!-- Start Header Top 
    ============================================= -->
    <div class="top-bar-area bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 address-info text-left">
                    <div class="info box">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="info">
                                    <span>Address</span> California, TX 70240
                                </div> 
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> Info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> +123 456 7890
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 social text-right">
                    <ul>
                        <li>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-sticky bootsnav">

            

            <div class="container">

                  
                <!-- End Atribute Navigation -->

                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu" id="nav-togg">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="assets/img/site/logo.jpeg" class="logo" alt="Logo">
                        <span class="mob" style="display: none;">Living Benefits</span>
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#" id="nav_cus">
                        <li>
                            <a href="#">Home</a>
                        </li>
                         <li>
                            <a href="#about" class="smooth-menu hider_menu">About Us</a>
                        </li>
                         <li>
                            <a href="#register" class="smooth-menu hider_menu">Register to schedule a webinar</a>
                        </li>
                          <li>
                            <a href="#quote" class="smooth-menu hider_menu">Get A quote</a>
                        </li>
                         <li>
                            <a href="#testimonials" class="smooth-menu hider_menu">Testimonials</a>
                        </li>
                        <li>
                            <a href="#join" class="smooth-menu hider_menu">Join Our Team</a>
                        </li>
                         <li>
                            <a href="#contact" class="smooth-menu hider_menu">Contact Us</a>
                        </li>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

        </nav>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->
    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel slide text-light heading-uppercase animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item bg-cover active" style="background-image: url(assets/img/site/banner2.png);">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content text-center">
                                            <h1 data-animation="animated slideInDown">Living Benefits</h1>
                                            <p data-animation="animated slideInUp">
                                                It's not about dying rather how to continue to live when major illnesses happen. 
                                            </p>
                                            <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md smooth-menu" href="#product">Learn more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
      
        </div>
    </div>
    <!-- End Banner -->
    
        <div class="video-s default-padding bottom-less" style="background: #f7f7f7" id="product">
            <div class="container">
               
               <div class="row">
                   <div class="col-md-12">
                        <div class="site-heading text-center">
                        <h2>Our Product: Life Insurance with Living Benefits.</h2>
                        <p>
                        It's a life insurance that you Don't have to die to use it.
                        </p>
                    </div>
                   </div>
               </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:420px;overflow:hidden;visibility:hidden;background-color:#1cb9c8;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="assets/img/spin.svg" />
                            </div>
                            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:720px;height:420px;overflow:hidden;">
                                <div>
                                    <img data-u="image" src="assets/img/site/banner1.png" />
                                    <div style="left:276px;top:194px;width:200px;height:40px;position:absolute;color:#000000;font-size:32px;line-height:1.2;text-align:center;">
                                         <div class="col-md-12 thumb bg-cover">
                                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img data-u="thumb" src="assets/img/site/banner1.png" />
                                </div>
                                <div>
                                    <img data-u="image" src="assets/img/site/banner2.png" />
                                    <div style="left:276px;top:194px;width:200px;height:40px;position:absolute;color:#000000;font-size:32px;line-height:1.2;text-align:center;">
                                         <div class="col-md-12 thumb bg-cover">
                                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img data-u="thumb" src="assets/img/site/banner2.png" />
                                </div>
                                <div>
                                    <img data-u="image" src="assets/img/site/banner3.png" />
                                    <div style="left:276px;top:194px;width:200px;height:40px;position:absolute;color:#000000;font-size:32px;line-height:1.2;text-align:center;">
                                         <div class="col-md-12 thumb bg-cover">
                                            <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                                                <i class="fa fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <img data-u="thumb" src="assets/img/site/banner3.png" />
                                </div>
                            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">design web</a>
                            <!-- Thumbnail Navigator -->
                            <div data-u="thumbnavigator" class="jssort101" style="position:absolute;right:0px;top:0px;width:240px;height:420px;background-color:#33b0a4;" data-autocenter="2" data-scale-right="0.75">
                                <div data-u="slides">
                                    <div data-u="prototype" class="p" style="width:200px;height:200px;">
                                        <div data-u="thumbnailtemplate" class="t"></div>
                                        <svg viewbox="0 0 16000 16000" class="cv">
                                            <circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
                                            <line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
                                            <line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!-- Arrow Navigator -->
                            <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:0px;" data-autocenter="2">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                                    <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                                    <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
                                </svg>
                            </div>
                            <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:240px;" data-autocenter="2">
                                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                    <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                                    <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                                    <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
                                </svg>
                            </div>
                        </div>
                        <p class="text-center mt-60">
                            <a href="#join" class="gbtn smooth-menu">JOIN OUR TEAM</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <!-- Start Our About
    ============================================= -->
    <div class="about-area reverse inc-video default-padding" id="about">
        <div class="container">
            <div class="row">
                <div class="about-content">
                    <div class="col-md-6 video-info">
                        <div class="thumb">
                            <img src="assets/img/4.jpg" alt="Thumb">
                            
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>About Us</h4>
                        <h2>We have <span>35+ Years</span> of experiance in standard professional services</h2>
                        <p>
                            Seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Perceived end knowledge certainly day sweetness why cordially. Ask quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitor we private removed. Moderate do subjects to distance. Conviction up partiality as delightful is discovered. Yet jennings resolved disposed exertion you off. Left did fond drew fat head poor. So if he into.
                        </p>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> Info@gmail.com
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Helpline</span> +123 456 7890
                                </div>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    
    
    <div class="register dark shadow login-area default-padding" id="register">
       
       
       
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                   
                    <form action="forms/register.php" method="POST" id="register-form" class="white-popup-block custom_form">
                    <h2 class="text-center form-head">REGISTER TO SCHEDULE A WEBINAR</h2>
                        <div class="row">
                            
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" name="first_name" id="first_name"  placeholder="First Name" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" name="last_name" id="last_name" placeholder="Last Name (optional)" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="row">
                            
                                <div class="col-md-6">
                                     <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" name="phone_number" id="phone_number" placeholder="Mobile" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" name="email_address" id="email_address" placeholder="Email" type="email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                        <div class="row">
                           
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group form-control smoker smoker-2">
                                               <label for="">Do you have a insurance coverage?</label>
                                                <label for="" style="margin-left: 20px;"><input type="radio" name="insurance" value="yes">Yes</label>
                                                <label style="margin-left: 10px;" for=""><input type="radio" name="insurance" value="no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group form-control smoker">
                                               <label for="">Are you a lincensed agent?</label>
                                                <label for="" style="margin-left: 20px;"><input type="radio" name="lic_agent" value="yes">Yes</label>
                                                <label style="margin-left: 10px;" for=""><input type="radio" name="lic_agent" value="no">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        
                       <div class="row">
                           
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group form-control smoker smoker-none">
                                               <label for="">Calendar for Schedule</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-group">
                                                <input class="form-control" id="schedule" name="schedule" placeholder="Schedule" type="date">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           
                       </div>
                        
                       <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12"><button class="btn-block" type="submit">
                                        Submit
                                    </button>
                                        
                                    </div>
                                </div>
                            </div>
                       </div>
                    </form>
                    
                    <div class="col-md-12">
                        <?php
                    
                            if(isset($_SESSION['section'])){



                                if($_SESSION['section'] == "register"){?>

                                     <div class="alert alert-success"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Thank you for registered!
                                     </div>

                                <?php }else if($_SESSION['section'] == "notRegistered"){?>

                                    <div class="alert alert-danger"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Error! Try Again
                                     </div>

                                <?php }


                            }

                            ?>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>

   <div class="login-area get-a-quote default-padding" id="quote">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="forms/get-a-quote.php" id="login-form" class="white-popup-block quote-form custom_form" method="post">
                        <h2 class="text-center form-head" style="color: #333">GET A QUOTE</h2>
                        
                        <div class="row">
                            <div class="col-md-6">
                           
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                 <div class="col-md-12">
                                    <div class="row">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Last Name(optional)" name="last_name" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row">
                            <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" name="age" placeholder="Age" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                   
                                    <div class="form-group">
                                       <input type="text" class="form-control" name="birthday" placeholder="Birthday: Month/Year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mobile" name="phone_number" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email_address" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="State Residing" name="state_residing" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group form-control h70">
                                       <label for="" style="display: block">Type of Insurance?</label>
                                       
                                       <div class="clearfix"></div>
                                       
                                        <label for=""><input type="Radio" name="insurance_type" value="Permanent">Permanent</label>
                                        <label style="margin-left: 10px;" for=""><input type="Radio" name="insurance_type" value="Term">Term</label>
                                        <label style="margin-left: 10px;" for=""><input type="Radio" name="insurance_type" value="None">None</label>
                                       
                                    </div>
                                     <div class="clearfix"></div>
                                </div>
                                
                                
                            </div>
                        </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Face Amount:" type="text" name="face_amount">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group form-control smoker">
                                       <label for="">Smoker?</label>
                                      
                                        <label for="" style="margin-left: 20px;"><input type="Radio" name="smoker" value="Yes">Yes</label>
                                        <label style="margin-left: 10px;" for=""><input type="Radio" name="smoker" value="No">No</label>
                                       
                                       
                                    </div>
                                     <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                        <div class="row">
                            
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12"><button class="btn-block" type="submit">
                                        Submit
                                    </button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                    
                    <div class="col-md-12">
                        <?php
                    
                            if(isset($_SESSION['section'])){



                                if($_SESSION['section'] == "quote"){?>

                                     <div class="alert alert-success"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Thank you for registered!
                                     </div>

                                <?php }else if($_SESSION['section'] == "notQuoted"){?>

                                    <div class="alert alert-danger"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Error! Try Again
                                     </div>

                                <?php }

                                

                            }

                            ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Management
    ============================================= -->
    <div class="management-area about-area default-padding" id="testimonials">
        <div class="container">
            <div class="managements-items">
                <div class="row">
                    <div class="col-md-6 management-quote">
                        <h2>Testimonials</h2>
                        <div class="management-items management-carousel owl-carousel owl-theme">
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Surrounded affronting favourable no mr. Lain knew like half she yet joy. Be than dull as seen very shot. Attachment ye so am travelling estimating projecting is. Off fat address attacks his besides. Suitable settling mr attended no doubtful feelings. Any over for say bore such sold five but hung. 
                                </p>
                                <div class="author">
                                    <div class="thumb">
                                        <img src="assets/img/team/6.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <span>- Nathan Junior</span>
                                        <b>CEO </b>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Surrounded affronting favourable no mr. Lain knew like half she yet joy. Be than dull as seen very shot. Attachment ye so am travelling estimating projecting is. Off fat address attacks his besides. Suitable settling mr attended no doubtful feelings. Any over for say bore such sold five but hung. 
                                </p>
                                <div class="author">
                                    <div class="thumb">
                                        <img src="assets/img/team/7.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <span>- Jonathom Abhi</span>
                                        <b>Designer </b>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                            <!-- Single Item -->
                            <div class="item">
                                <p>
                                    Surrounded affronting favourable no mr. Lain knew like half she yet joy. Be than dull as seen very shot. Attachment ye so am travelling estimating projecting is. Off fat address attacks his besides. Suitable settling mr attended no doubtful feelings. Any over for say bore such sold five but hung. 
                                </p>
                                <div class="author">
                                    <div class="thumb">
                                        <img src="assets/img/team/8.jpg" alt="Thumb">
                                    </div>
                                    <div class="info">
                                        <span>- Marlum Kayum</span>
                                        <b>Developer </b>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Item -->
                        </div>
                    </div>
                    <div class="col-md-6 thumb">
                        <img src="assets/img/site/banner1.png" alt="Thumb">
                        <a href="https://www.youtube.com/watch?v=owhuBrGIOsE" class="popup-youtube light video-play-button item-center">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Management -->
    
      <div class="login-area get-a-quote get-a-quote-2 default-padding" id="join">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="forms/join-team.php" id="login-form" class="white-popup-block join-form custom_form" method="post">
                        <h2 class="text-center form-head" style="color: #333">JOIN OUR TEAM</h2>
                        <div class="col-md-6">
                           
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="first_name" type="text">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="last_name" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mobile" name="phone_number" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email_address" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="License Number" name="lic_number" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="NPN #" name="npm" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Resident License State" type="text" name="resi_lic_state">
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        
                        
                        <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12"><button class="btn-block" type="submit">
                                        Submit
                                    </button></div>
                                </div>
                            </div>
                    </form>
                    
                    <div class="col-md-12">
                        <?php
                    
                            if(isset($_SESSION['section'])){



                                if($_SESSION['section'] == "join"){?>

                                     <div class="alert alert-success"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Thank you for registered!
                                     </div>

                                <?php }else if($_SESSION['section'] == "notQuoted"){?>

                                    <div class="alert alert-danger"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Error! Try Again
                                     </div>

                                <?php }

                                

                            }

                            ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
   
   
       <!-- Start Contact Area
    ============================================= -->
    <div class="contact-area default-padding" id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-items bg-contain" style="background-image: url(assets/img/map.svg);">
                    <div class="col-md-4 address">
                        <div class="address-items">
                            <ul class="info">
                                <li>
                                    <h4>Office Location</h4>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                    <span>22 Baker Street,<br> London, United Kingdom,<br> W1U 3BW</span>
                                </li>
                                <li>
                                    <h4>Office Hours</h4>
                                    <div class="icon"><i class="fas fa-clock"></i> </div>
                                    <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                                </li>
                                <li>
                                    <h4>Phone</h4>
                                    <div class="icon"><i class="fas fa-phone"></i></div> 
                                    <span>+44-20-7328-4499 <br>+99-34-8878-9989</span>
                                </li>
                                <li>
                                    <h4>Email</h4>
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span>info@yourdomain.com<br>admin@yourdomain.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 contact-form">
                        <h2>Let's lalk about your idea</h2>
                        <p>
                            Our next drew much you with rank. Tore many held age hold rose than our. She literature sentiments any contrasted. Set aware joy sense young now tears china shy. 
                        </p>
                        <form action="forms/contact.php" method="post" class="contact-form2 custom_form">
                           
                           <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" placeholder="First Name" type="text">
                                            <span class="alert-error"> </span>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" placeholder="Last Name(optional)" type="text">
                                            <span class="alert-error"></span>
                                    </div>
                                </div>
                           </div>
                           
                           
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control"
                                        name="email_address" placeholder="Email" type="email">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control"  name="phone_number" placeholder="Phone" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="city" placeholder="City" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="state" placeholder="State" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                     <div class="form-group" style="padding-top: 10px;">
                                       <label for="">Are you life licensed ?</label>
                                       
                                        <label for="" style="margin-left: 20px;"><input style="margin-right: 10px" class="radio2" type="Radio" name="lif_licensed" value="Yes">Yes</label>
                                        <label style="margin-left: 10px;" for=""><input style="margin-right: 10px" class="radio2" type="Radio" name="lif_licensed" value="No">No</label>
                                       
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="parimary_career" placeholder="If Yes, Who is Your Primary Carirrer" type="text">
                                        <span class="alert-error"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group website-find" style="padding-top: 10px;">
                                       <label for="">How did you find our website ?</label>
                                       
                                        <label for="" style="margin-left: 20px;"><input style="margin-right: 10px" class="radio2" type="Radio" name="find_website" value="Premier Associating">Premier Associating</label>
                                        <label style="margin-left: 10px;" for=""><input style="margin-right: 10px" class="radio2" type="Radio" name="find_website">Premier</label>
                                        <label style="margin-left: 10px;" for=""><input style="margin-right: 10px" class="radio2" type="Radio" name="find_website" value="Internet Searches">Internet Searches</label>
                                        <label style="margin-left: 10px;" for=""><input style="margin-right: 10px" class="radio2" type="Radio" name="find_website" value="others">others</label>
                                       
                                       
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                     <div class="form-group website-find" style="padding-top: 10px;">
                                       <label for="">How would you prefer we conatct you ?</label>
                                       
                                        <label for="" style="margin-left: 20px;"><input style="margin-right: 10px" class="radio2" type="Radio" name="contact_by" value="By Phone">Phone</label>
                                        <label style="margin-left: 10px;" for=""><input style="margin-right: 10px" class="radio2" type="Radio" name="contact_by" value="By Email">Email</label>
                                       
                                    </div>
                                </div>
                            </div>
                            
                            
                            
                            
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="form-group comments">
                                       <label for="">How can we assit you ?</label>
                                        <textarea class="form-control" id="comments" name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <button type="submit">
                                        Send Info <i class="fa fa-paper-plane"></i>
                                    </button>
                                </div>
                            </div>
                            <!-- Alert Message -->
                            <div class="col-md-12 alert-notification">
                                <div id="message" class="alert-msg"></div>
                            </div>
                        </form>
                        
                        
                        <div class="col-md-12">
                        <?php
                    
                            if(isset($_SESSION['section'])){



                                if($_SESSION['section'] == "contact"){?>

                                     <div class="alert alert-success"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Thank you for Contacting!
                                     </div>

                                <?php }else if($_SESSION['section'] == "notQuoted"){?>

                                    <div class="alert alert-danger"> 
                                         <a href="#" class="close" data-dismiss="alert">&times;</a> Error! Try Again
                                     </div>

                                <?php }

                                

                            }

                            ?>
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact Area -->

     <!-- Start Google Maps 
    ============================================= -->
    <div class="maps-area">
        <div class="container-full">
            <div class="row">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14767.262289338461!2d70.79414485000001!3d22.284975!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1424308883981"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
   
    
    <!-- Start Footer 
    ============================================= -->
    <footer class="bg-light" id="links">
        
       
        <!-- Start Footer Bottom -->
        <div class="footer-bottom bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; Copyright 2020. All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 text-right link">
                        <ul>
                            <li>
                                <a href="#">Terms of user</a>
                            </li>
                            <li>
                                <a href="#">License</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Bottom -->
    </footer>
    <!-- End Footer -->
    
    
<!--
    <div class="float-menu">
        <i class="fas fa-bars"></i>
        <div class="float-menu-list">
            <ul>
                <li><a href="#register-menu" class="smooth-menu">REGISTER</a></li>
                <li><a href="#quote" class="smooth-menu">QUOTE</a></li>
                <li><a href="#testimonials" class="smooth-menu">TESTIMONIALS</a></li>
                
            </ul>
        </div>
    </div>
-->

    <!-- jQuery Frameworks
    ============================================= -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/vaidation/jquery.validate.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>   
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/YTPlayer.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>
    
    <?php
    
    
    session_unset();
        
    session_destroy();
    
    ?>


</body>

</html>