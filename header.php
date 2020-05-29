<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Livingbnefitsquote
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	
	
	 <title>Living Benefits</title>
	  <!-- ========== Start Stylesheet ========== -->
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/fonts/css/all.css">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootsnav.css" rel="stylesheet" />
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/custom.css">
    <!-- ========== End Stylesheet ========== -->
    
    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    
     <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
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

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


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
                                    <span>Address</span> <?php if(get_field('address')) the_field('address'); ?>
                                </div> 
                            </li>
                            
                            <?php if(get_field('email_address')){?> 
                            
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <div class="info">
                                    <span>Email</span> <?php if(get_field('email_address')) the_field('email_address'); ?>
                                </div>
                            </li>
                            
                            <?php } ?>
                            
                            <?php if(get_field('phone')){?> 
                            
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="info">
                                    <span>Phone</span> <?php if(get_field('phone')) the_field('phone'); ?>
                                </div>
                            </li>
                            
                            <?php } ?>
                            
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 social text-right">
                    <ul>
                        <li>
                            <a href="<?php if(get_field('facebook_link')) the_field('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="<?php if(get_field('twitter_link')) the_field('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="<?php if(get_field('instagram_link')) the_field('instagram_link'); ?>"><i class="fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href="<?php if(get_field('linkedin_link')) the_field('linkedin_link'); ?>"><i class="fab fa-linkedin"></i></a>
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
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/site/logo.png" class="logo" alt="Logo">
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