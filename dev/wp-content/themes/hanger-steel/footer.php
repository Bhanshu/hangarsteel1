<!-- Main Footer Starts-->
    <footer class="main-footer wow bounceInUp">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-holder">

            <div class="footer-logo">
                <h2><?php the_field('footer_title',5);?></h2>
                <p>©<?php echo date("Y"); ?> <?php the_field('footer_sub_title',5);?></p>
            </div>

            <div class="footer-address">
                <p>
                    <?php the_field('footer_add',5);?><br>
                    <?php the_field('footer_sub_add',5);?>
                     <?php the_field('footer_subb_add',5);?><br>
					 <a href="tel:<?php the_field('footer_subbb_add',5);?>"> <?php the_field('footer_subbb_add',5);?></a>
					 <?php the_field('footer_subbbb_add',5);?>
                </p>
            </div>

            <div class="footer-menu">
                <ul>
                    <?php
						 $defaults = array( 
						 'menu' => 'dynamic_menu',
						 'container' => '',
						 'container_class' => '',
						 'container_id' => '',
						 'menu_class' => 'menu',
						 'menu_id' => '',
						 'echo' => true,
	                     'fallback_cb' => 'wp_page_menu', 
						 'before' => '', 
						 'after' => '',
						 'link_before' => '', 
						 'link_after' => '',
						 'items_wrap' => '%3$s',
                         'depth' => 0, 
						 'walker' => '', 
						 'theme_location' => '' );
						
                      wp_nav_menu($defaults);
	                 ?>
                </ul>
            </div>
                
          </div>
        </div>
    </footer>
<section class="imark-foot">
 <div class="container"><span>Powered By: <a href="http://www.imarkinfotech.com/" target="_blank"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Imark-Powered-By(2).svg"></a></span></div></section>

    <!-- Main Footer Ends-->
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/wow.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.validate.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/form.js"></script>
	<!--<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.js"></script>-->
    
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/owl.carousel.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5lightbox/html5lightbox.js" type="text/javascript"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 150,
            mobile: true,
            live: true,
            callback: function (box) {},
            scrollContainer: null
        });
        wow.init();
    </script>

    <script>
        jQuery(document).ready(function () {
            jQuery('#myCarousel').carousel({
                interval: 0
            })

            jQuery('#myCarousel').on('slid.bs.carousel', function () {
                //alert("slid");
            });


        });
    </script>
	
    <script>
    jQuery(document).ready(function() {
      jQuery("#hangar-clients").owlCarousel({
        autoPlay: 2000,
		 autoplay:true,
		 autoplayTimeout:2000,
		autoplayHoverPause:true,
		 stopOnHover : true,
        items : 5,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
      });

    });
    </script>
<script>
 	 jQuery(function($) { 
	 jQuery('#signupForm').validate({
		 
			rules: {
			   email: {
					required: true,
					email: true
				},
				phone: {
					required: true,
				    maxlength: 20
					
				},
                msg: {
					maxlength: 2000
				},
			},
		messages: {
				
				email: {
					required: ""
					
				},
				phone: {
					required:""
				   
					
				},
			},
		 
   errorPlacement: function (error, element) {
	     jQuery(".error-form").show(); 
   },
		submitHandler: function(form) {
			    jQuery(".error-form").hide(); 
			  
		   
var First_name1 = jQuery('#firstname').val();
var last_name1 = jQuery('#lastname').val();
var phone1 = jQuery('#phone').val();
var email1= jQuery('#email').val();
var contact1 = jQuery("input[name='optionsRadios1']:checked").val();
var contact2 = jQuery("input[name='optionsRadios2']:checked").val();

var file = jQuery('#file_upload').val();
var msgs = jQuery('#msg').val();

// var mgs1 = jQuery('#msg').val();
jQuery(form).ajaxSubmit({
type: "POST",
url: '<?php echo site_url(); ?>/wp-content/themes/hanger-steel/ajax/architect_contact_form.php', 
data:{First_name1:First_name1,last_name1:last_name1,phone1:phone1,email1:email1,contact1:contact1,contact2:contact2,file:file,msgs:msgs,format:'raw'},
 beforeSend: function() {
  jQuery("#loading_sec").show();
			 
           },
success:function(data) 
{

// if(data== -1)
// {
			// jQuery("#loading_sec").hide();
// jQuery("#signupForm").hide();
// jQuery("#success_form").empty().append("Please upload the jpg/Jpeg/Png format Only");
// jQuery("#success_form").show();
// }
// else
// {
		jQuery("#loading_sec").hide();

// jQuery("#success_form").empty().append("Success");
jQuery(".success").show();
window.setTimeout('location.reload()', 1500);
jQuery('form').clearForm();

// }
}
});
}

});
	 });

		</script>
		<script>
           jQuery(function () {
               jQuery("input[name='firstname']").keydown(function (e) {
                   if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
                       // let it happen, don't do anything
                       return;
                   }
                   if (e.ctrlKey || e.altKey) {
                       e.preventDefault();
                   } else {
                       var key = e.keyCode;
                       if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                           e.preventDefault();
                       }
                   }
               });
           });
       </script>
	   <script>
           jQuery(function () {
               jQuery("input[name='lastname']").keydown(function (e) {
                   if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
                       // let it happen, don't do anything
                       return;
                   }
                   if (e.ctrlKey || e.altKey) {
                       e.preventDefault();
                   } else {
                       var key = e.keyCode;
                       if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                           e.preventDefault();
                       }
                   }
               });
           });
       </script>
		<script>
			function change_file_stru()
			{
				var value_file = jQuery("#file_upload").val().split('\\').pop();
				
					if(value_file == "")
					{
					jQuery("arcfilename").text("No file selected");
					}
					else
					{
					jQuery("arcfilename").text(value_file);
					}
				
				
				
			}
			</script>
		<script>
		
		 jQuery(function($) { 
	 jQuery('#quoteform').validate({
		 
			rules: {
			  email1: {
					required: true,
					email: true
				},
				pphone: {
					required: true
					
				},
                msg: {
					maxlength: 2000
				},
				
			},
			messages: {
				
				email1: {
					required: ""
					
				},
				pphone: {
					required:""
				   
					
				},
			},
			errorPlacement: function (error, element) {
	     jQuery(".error-form").show(); 
   },
		 
				submitHandler: function(form) {
					jQuery(".error-form").hide(); 
					
var name1 = jQuery('#name').val();
var company1 = jQuery('#company').val();
var address1 = jQuery('#address').val();
var email2= jQuery('#email1').val();
var phone1 = jQuery('#pphone').val();
var phone2 = jQuery('#sphone').val();
var apt_suit = jQuery('#as').val();
var city1 = jQuery('#city').val();
var state1 = jQuery('#state').val();
var zip_c1 = jQuery('#zc').val();
var contact1 = jQuery("input[name='optionsRadios1']:checked").val();
var amm1 = jQuery('#amm').val();
var wid1 = jQuery('#wid').val();
var dpt1 = jQuery('#dpt').val();
var he1 = jQuery('#he').val();
var dh1 = jQuery('#dh').val();
var dw1 = jQuery('#dw').val();
var contact2 = jQuery("input[name='options1']:checked").val();
var contact3 = jQuery("input[name='option1']:checked").val();
var filee = jQuery('#file_upload').val();
var msgs = jQuery('#msg').val();

jQuery(form).ajaxSubmit({
type: "POST",
url: '<?php echo site_url(); ?>/wp-content/themes/hanger-steel/ajax/quote-ajax.php', 
data:{name1:name1,company1:company1,address1:address1,email2:email2,phone1:phone1,phone2:phone2,apt_suit:apt_suit,city1:city1,state1:state1,zip_c1:zip_c1,contact1:contact1,amm1:amm1,wid1:wid1,dpt1:dpt1,he1:he1,dh1:dh1,dw1:dw1,contact2:contact2,contact3:contact3,filee:filee,msgs:msgs,format:'raw'},
 beforeSend: function() {
              jQuery("#loading_sec").show();
			 
           },

success:function(data) 
{
jQuery("#loading_sec").hide();

// jQuery("#success_form").empty().append("<h2>Success</h2>");
jQuery(".success").show();
window.setTimeout('location.reload()', 1500);
jQuery('form').clearForm();

}
});
}
});
 });
		   function recaptchaCallback() {
    jQuery('#submit').removeAttr('disabled');
};
		</script>
		<script>
           jQuery(function () {
               jQuery("input[name='name']").keydown(function (e) {
                   if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1) {
                       // let it happen, don't do anything
                       return;
                   }
                   if (e.ctrlKey || e.altKey) {
                       e.preventDefault();
                   } else {
                       var key = e.keyCode;
                       if (!((key == 8) || (key == 32) || (key == 46) || (key >= 35 && key <= 40) || (key >= 65 && key <= 90))) {
                           e.preventDefault();
                       }
                   }
               });
           });
       </script>
			<?php wp_footer(); ?>
			<script>
			function change_file_stru()
			{
				var value_file = jQuery("#file_upload").val().split('\\').pop();
				
					if(value_file == "")
					{
					jQuery("arcfilename").text("No file selected");
					jQuery(".remove_button").remove();
					}
					else
					{
					var file_typpe = value_file.split('.').pop();
					if(file_typpe=="pdf"|| file_typpe=="doc" || file_typpe=="docx" || file_typpe=="xls" ||file_typpe=="xlsx" ||file_typpe=="jpeg" ||file_typpe=="png" ||file_typpe=="mp3" ||file_typpe=="mp4" ||file_typpe=="bmp" ||file_typpe=="tiff" || file_typpe=="jpg" ||file_typpe=="txt")
					{
						jQuery("arcfilename").text(value_file);
						jQuery("<a href='javascript:void(0);' class='button-black remove_button' onclick='remove_library()'>x</a>").insertAfter("arcfilename");
					}
					else
					{
						jQuery("#file_upload").val("");
						jQuery("arcfilename").text("Please add docx,doc,png,xlsx,xls,mp4,pdf,mp3,bmp,jpg,tiff,txt,jpeg files only");
					}
					
					}
				
				
				
			}
			function remove_library()
			{
				jQuery("#file_upload").val("");
				jQuery("arcfilename").text("No file selected");
					jQuery(".remove_button").remove();
			}
			</script>
			<script>
 	 jQuery(function($) { 
	 jQuery('#contact_form').validate({
		 
			rules: {
			    phn: {
					required: true,
					maxlength: 20
				},				
				emaill: {
					required: true,
					email: true
				},
				
			},
			messages: {
				
				emaill: {
					required: ""
					
				},
				phn: {
					required:""
				   
					
				},
			},
		errorPlacement: function (error, element) {
	     jQuery(".error-form").show(); 
   },

		submitHandler: function(form) {
			jQuery(".error-form").hide(); 
					
			
var First_name1 = jQuery('#firstname').val();
var last_name1 = jQuery('#lastname').val();
var phone1 = jQuery('#phn').val();
var email2= jQuery('#emaill').val();
var contact1 = jQuery("input[name='optionsRadios1']:checked").val();

jQuery(form).ajaxSubmit({
type: "POST",
url: '<?php echo site_url(); ?>/wp-content/themes/hanger-steel/ajax/contact_form.php', 
data:{First_name1:First_name1,last_name1:last_name1,phone1:phone1,email2:email2,contact1:contact1,format:'raw'},
beforeSend: function() {
              jQuery("#loading_sec").show();
			 
           },
success:function(data) 
{
	jQuery("#loading_sec").hide();

jQuery(".success").show();
window.setTimeout('location.reload()', 1500);
jQuery('form').clearForm();
}

});
}
});
	 });
	   function recaptchaCallback() {
    jQuery('#submit').removeAttr('disabled');
};
	

		</script>
		
</body>

</html>