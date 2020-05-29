<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Livingbnefitsquote
 */

?>

 
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
                                <a href="http://livingbenefitsquote.com">Livingbenefitsquote.com</a>
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
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery-1.12.4.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/vaidation/jquery.validate.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.easing.min.js"></script>   
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/YTPlayer.min.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/bootsnav.js"></script>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/assets/js/main.js"></script>
    
    <?php
    
    
    session_unset();
        
    session_destroy();
    
    ?>

<?php wp_footer(); ?>

</body>
</html>
