

<?php


// Template Name: Home Page

session_start();


get_header();


?>



   

    <!-- Start Banner 
    ============================================= -->
    <div class="banner-area">
        <div id="bootcarousel" class="carousel slide text-light heading-uppercase animate_text" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                
                <div class="item bg-cover active" style="background-image: url(<?php if(get_field('banner_image')) the_field('banner_image'); ?>);">
                    <div class="box-table shadow dark">
                        <div class="box-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1">
                                        <div class="content text-center">
                                            <h1 data-animation="animated slideInDown"><?php if(get_field('heading')) the_field('heading'); ?></h1>
                                            <p data-animation="animated slideInUp">
                                                <?php if(get_field('sub_heading')) the_field('sub_heading'); ?> 
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
                        <h2><?php if(get_field('our_heading')) the_field('our_heading'); ?> </h2>
                        <p>
                       <?php if(get_field('our_sub_heading')) the_field('our_sub_heading'); ?> 
                        </p>
                    </div>
                   </div>
               </div>
               
                <div class="row">
                    <div class="col-md-12">
                        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:960px;height:420px;overflow:hidden;visibility:hidden;background-color:#1cb9c8;">
                            <!-- Loading Screen -->
                            <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/spin.svg" />
                            </div>
                            
                            
                             <?php

                            // check if the repeater field has rows of data
                            if( have_rows('videos') ):

                                // loop through the rows of data
                                while ( have_rows('videos') ) : the_row(); ?>

                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:720px;height:420px;overflow:hidden;">
                                        <div>
                                            <img data-u="image" src="<?php if(get_sub_field('video_picture')) the_sub_field('video_picture'); ?>" />
                                            <div style="left:276px;top:194px;width:200px;height:40px;position:absolute;color:#000000;font-size:32px;line-height:1.2;text-align:center;">
                                                 <div class="col-md-12 thumb bg-cover">
                                                    <a href="<?php if(get_sub_field('video_link')) the_sub_field('video_link'); ?>" class="popup-youtube light video-play-button item-center" alt="Living Benefits Video">
                                                        <i class="fa fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <img data-u="thumb" src="<?php if(get_sub_field('video_small_thumbnail')) the_sub_field('video_small_thumbnail'); ?>" />
                                        </div>

                                    </div>


                                <?php endwhile;

                            else :

                                // no rows found

                            endif;

                            ?>
                            
                           
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
                            <a href="#join" class="gbtn smooth-menu"><?php if(get_field('button_text')) the_field('button_text'); ?></a>
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
                            <img src="<?php if(get_field('right_picture')) {$image = the_field('right_picture'); echo $image['url']; } ?>" alt="<?php echo $image['alt']; ?>">
                            
                        </div>
                    </div>
                    <div class="col-md-6 info">
                        <h4>About Us</h4>
                        <h2><?php if(get_field('bold_heading')) the_field('bold_heading'); ?></h2>
                        <p>
                           <?php if(get_field('description')) the_field('description'); ?>
                        </p>
                        <h3>Our Vision:</h3>
                        <p><?php if(get_field('vision')) the_field('vision'); ?></p>
                       
                       <h3>Our Mission:</h3>
                        <p><?php if(get_field('mission')) the_field('mission'); ?></p>
                       
                       
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our About -->
    
    
    <div class="register dark shadow login-area default-padding" id="register" style="background-image: url(<?php if(get_field('w_background_image')) the_field('w_background_image'); ?>);">
       
       
       
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                   
                    <form action="<?php bloginfo('stylesheet_directory'); ?>/forms/register.php" method="POST" id="register-form" class="white-popup-block custom_form">
                    <h2 class="text-center form-head"><?php if(get_field('w_heading')) the_field('w_heading'); ?></h2>
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

   <div class="login-area get-a-quote default-padding" id="quote" style="background-image: url(<?php if(get_field('q_background_image')) the_field('q_background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="<?php bloginfo('stylesheet_directory'); ?>/forms/get-a-quote.php" id="login-form" class="white-popup-block quote-form custom_form" method="post">
                        <h2 class="text-center form-head" style="color: #333"><?php if(get_field('q_heading')) the_field('q_heading'); ?></h2>
                        
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
     
                        
    <?php

        // check if the repeater field has rows of data
    if( have_rows('testimonials') ): ?>
                            
                            
    <div class="management-area about-area default-padding" id="testimonials">
        <div class="container">
            <div class="managements-items">
                <div class="row">
                    <div class="col-md-6 management-quote">
                        <h2><?php if(get_field('t_heading')) the_field('t_heading'); ?></h2>
                        <div class="management-items management-carousel owl-carousel owl-theme">
                            
                            <?php
                                // loop through the rows of data
                                while ( have_rows('testimonials') ) : the_row(); ?>

                                     <div class="item active">
                                        <p>
                                           <?php if(get_sub_field('descriptions')) the_sub_field('descriptions'); ?>
                                            
                                        </p>
                                        <div class="author">
                                            <div class="info">
                                                <span>- <?php if(get_sub_field('name')) the_sub_field('name'); ?></span>
                                                <b><?php if(get_sub_field('title')) the_sub_field('title'); ?> </b>
                                            </div>
                                        </div>
                                    </div>
                                    

                                <?php endwhile; ?>

                              </div>
                            </div>
                            <div class="col-md-6 thumb">
                                <img src="<?php if(get_field('t_video_thumbnail')) $image = get_field('t_video_thumbnail'); echo $image['url']; ?>" alt="<?php  echo $image['alt']; ?>">
                                <a href="<?php if(get_field('t_video')) the_field('t_video'); ?>" class="popup-youtube light video-play-button item-center">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


                            <?php else :

                                // no rows found

                            endif;

                            ?>
                          
                           
                           
                          
    <!-- End Management -->
    
      <div class="login-area get-a-quote get-a-quote-2 default-padding" id="join" style="background: url(<?php if(get_field('j_background_image')) the_field('j_background_image'); ?>); background-repeat: no-repeat; background-position: center;background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form action="<?php bloginfo('stylesheet_directory'); ?>/forms/join-team.php" id="login-form" class="white-popup-block join-form custom_form" method="post">
                        <h2 class="text-center form-head" style="color: #333"><?php if(get_field('j_heading')) the_field('j_heading'); ?></h2>
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
                <div class="contact-items bg-contain" style="background-image: url(<?php bloginfo('stylesheet_directory'); ?>/assets/img/map.svg);">
                    <div class="col-md-4 address">
                        <div class="address-items">
                            <ul class="info">
                               
                               
                                <?php if(get_field('address')){?>
                                
                                 <li>
                                    <h4>Office Location</h4>
                                    <div class="icon"><i class="fas fa-map-marked-alt"></i></div> 
                                    <span><?php the_field('address'); ?></span>
                                </li>
                                  
                                <?php } ?>
                                
                                
                                <?php if(get_field('office_hour')){?>
                                
                                  <li>
                                    <h4>Office Hours</h4>
                                    <div class="icon"><i class="fas fa-clock"></i> </div>
                                    <span><?php the_field('office_hour') ?></span>
                                </li>
                                  
                                   <?php } ?>
                                   
                                
                               <?php if(get_field('phone')){?>
                                
                                  <li>
                                    <h4>Phone</h4>
                                    <div class="icon"><i class="fas fa-phone"></i></div> 
                                    <span><?php the_field('phone'); ?></span>
                                </li>
                                  
                                   <?php } ?>
                                
                                 <?php if(get_field('email_address')){?>
                                
                                  <li>
                                    <h4>Email</h4>
                                    <div class="icon"><i class="fas fa-envelope-open"></i> </div>
                                    <span><?php the_field('email_address'); ?></span>
                                </li>
                                  
                                   <?php } ?>
                                
                                
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8 contact-form">
                        <h2><?php if(get_field('c_heading')) the_field('c_heading'); ?></h2>
                        <p><?php if(get_field('c_sub_heading')) the_field('c_sub_heading'); ?>
                            
                        </p>
                        <form action="<?php bloginfo('stylesheet_directory'); ?>/forms/contact.php" method="post" class="contact-form2 custom_form">
                           
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
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225470.92232367545!2d-82.59436644739372!3d27.994411571848804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2b782b3b9d1e1%3A0xa75f1389af96b463!2sTampa%2C%20FL%2C%20USA!5e0!3m2!1sen!2sbd!4v1590684862558!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- End Google Maps -->
    
    <?php
get_footer();

   
   