/* ===================================================================
    
    Author          : Valid Theme
    Template Name   : Seorun - SEO & Digital Marketing Agency Template
    Version         : 1.0
    
* ================================================================= */

(function($) {
    "use strict";

    $(document).on('ready', function() {


        
        //menu-hider

        $(".hider_menu").click(function(){
   
            $("#nav-togg").click();
            
    
        });
        
        //VALIDATIONS

		$("#register-form").validate({
			rules: {
				first_name: "required",
                phone_number: {
                    required: true,
                    minlength: 11,
                    maxlength: 11
                },
                email_address:{
                    required: true,
                    email: true
                },
                insurance: "required",
                lic_agent: "required",
                schedule:{
                    required: true,
                    date: true
                }
				
			},
			messages: {
				first_name: "Please enter your first name",
                phone_number: {
                    required: "Please enter phone number",
                    minlength: "Must be 11 digit",
                    maxlength: "Must be 11 digit",
                },
                email_address: {
                    email: "Please enter a valid email address"
                }
				
			}
		});
        
        
        $(".quote-form").validate({
            
            rules: {
				first_name: "required",
                age: "required",
                birthday: "required",
                phone_number: {
                    required: true,
                    minlength: 11,
                    maxlength: 11
                },
                email_address:{
                    required: true,
                    email: true
                },
                state_residing: "required",
                insurance_type: "required",
                face_amount: "required",
                smoker: "required",
                
				
			},
			messages: {
				first_name: "Please enter your first name",
                age: "Please enter your age",
                phone_number: {
                    required: "Please enter phone number",
                    minlength: "Must be 11 digit",
                    maxlength: "Must be 11 digit",
                },
                email_address: {
                    email: "Please enter a valid email address"
                }
				
			}
            
            
        });
        
        $(".join-form").validate({
            
            rules: {
				first_name: "required",
				last_name: "required",
                phone_number: {
                    required: true,
                    minlength: 11,
                    maxlength: 11
                },
                email_address:{
                    required: true,
                    email: true
                },
                lic_number: "required",
                npm: "required",
                resi_lic_state: "required",
                schedule:{
                    required: true,
                    date: true
                }
				
			},
			messages: {
				first_name: "Please enter your first name",
                last_name: "Please enter your first name",
                phone_number: {
                    required: "Please enter phone number",
                    minlength: "Must be 11 digit",
                    maxlength: "Must be 11 digit",
                },
                email_address: {
                    email: "Please enter a valid email address"
                }
				
			}
            
        });
        
        
        $(".contact-form2").validate({
            
            
            rules: {
				first_name: "required",
                phone_number: {
                    required: true,
                    minlength: 11,
                    maxlength: 11
                },
                email_address:{
                    required: true,
                    email: true
                },
                city: "required",
                state: "required",
                lif_licensed: "required",
                parimary_career: "required",
                contact_by: "required",
                message: "required",
                
            	
			},
			messages: {
				first_name: "Please enter your first name",
                phone_number: {
                    required: "Please enter phone number",
                    minlength: "Must be 11 digit",
                    maxlength: "Must be 11 digit",
                },
                email_address: {
                    email: "Please enter a valid email address"
                }
				
			}
            
        });

        
        


        /* ==================================================
            # Smooth Scroll
         ===============================================*/
        $("body").scrollspy({
            target: ".navbar-collapse",
            offset: 200
        });
        $('a.smooth-menu').on('click', function(event) {
            var $anchor = $(this);
            var headerH = '75';
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - headerH + "px"
            }, 1500, 'easeInOutExpo');
            event.preventDefault();
        });


        




        /* ==================================================
            # Youtube Video Init
         ===============================================*/
        $('.player').mb_YTPlayer();


       
      

        /* ==================================================
            # Management Carousel
         ===============================================*/
        $('.management-carousel').owlCarousel({
            loop: false,
            nav: false,
            dots: true,
            autoplay: true,
            items: 1,
            navText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
        });
 $(".popup-youtube, .popup-vimeo, .popup-gmaps").magnificPopup({
            type: "iframe",
            mainClass: "mfp-fade",
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });

       



       

    }); // end document ready function
})(jQuery); // End jQuery