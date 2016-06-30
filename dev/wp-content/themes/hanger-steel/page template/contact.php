<?php /* Template Name: CONTACT */ ?>
  <?php get_header(); ?>
   <?php
function get_numerics ($str)
{
	preg_match_all('/\d+/', $str, $matches);
	return $matches[0];
}
?>
  <?php 
  $post_id = get_the_ID ();
  ?>

    <!-- Banner Section Starts-->
    <section class="banner">
        <div class="container">

            <div class="banner-slider wow bounceInUp">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
							  <?php  $one1 = get_post_meta($post_id,'gallery',true); ?>
							    <?php
                                           $arr1=get_numerics($one1);
										   $i=1;
										   $j=0;
                                           foreach($arr1 as $val1)
                                           {
                                           $val1;
                                           
                                            $small_image_url1 = wp_get_attachment_image_src($val1, 'medium');
											if($j<=4)
											{		
										?>
                                  <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="<?php if($i==1) { echo 'active'; } ?>"> </li>
                                          <?php  
											}	
					           $j++;
							   $i++;
							   ?>  <?php } ?>
                        
                	
                    </ol>
                    <!-- Wrapper for carousel items -->
                                            <div class="carousel-inner">
					 
	<?php  $one1 = get_post_meta($post_id,'gallery',true); ?>
							    <?php
                                           $arr1=get_numerics($one1);
										   $i=1;
                                           foreach($arr1 as $val1)
                                           {
                                           $val1;
                                           
                                            $small_image_url1 = wp_get_attachment_image_src($val1, 'full');
											if($j<=4)
											{		
										?> 
	                             <div class="item <?php if($i==1) { echo 'active'; } ?>">
		                                  <img src="<?php echo $small_image_url1[0]; ?>" />
										  
	                             </div>
	
											<?php  }
                                         $i++;
										   } ?>
                       
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">

                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">

                    </a>
                </div>
            </div>

        </div>
    </section>
    <!-- Banner Section Ends-->






    <!-- Content Section Starts-->
    <section class="content">
        <div class="container">



            <div class="common-content contct-frm">
                <h2><?php the_field('contact_us');?></h2>
                   <form class="steel-frm" id="contact_form">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="firstName"><i class="fa fa-user" aria-hidden="true"></i>First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="lastName"><i class="fa fa-user" aria-hidden="true"></i>Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="number"><i class="fa fa-mobile" aria-hidden="true"></i> Phone
                                </label>
                                <input type="text" name="phn" id="phn" class="form-control">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                                <input type="email" name="emaill" id="emaill" class="form-control" id="exampleInputEmail1">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="radio">
                                <label>Please Contact me By : </label>
                                <label>
                                    Phone
                                    <input type="radio" name="optionsRadios1" value="Phone">
                                </label>

                                <label>
                                    Email
                                    <input type="radio" name="optionsRadios1" value="Emaiil" checked>
                                </label>
                            </div>
                        </div>
                    </div>
					
                        
<div class="g-recaptcha form-group" data-theme="dark" data-sitekey="6LeL2yITAAAAAGHXVNR3WUijLTIjCby4vATh-6c4" data-callback="recaptchaCallback"></div>
          
                    <button type="submit" id="submit" class="btn btn-default" disabled>Submit</button>
					<div class="error-form" style="display:none;">
					   <div id="error_form" >
						   <h2> Please fill all the required fields</h2>
				    </div>
					</div>
                </form> 
				<div id="loading_sec" style="display:none" align="center">
						   <img src="<?php echo  get_template_directory_uri(); ?>/images/loading1.gif" id="loader">
						   </div>
                 <div class="success" style="display:none;">
                <div id="success_form" >
						   <h2> SUCCESS!!!</h2>
				 </div>
				 </div>
                <div class="row contact-details">
                    <div class="divide-3">
                        <h4><?php the_field('phy_add');?></h4>
                        <ul>
                            <li><?php the_field('phy_add1');?></li>
                            <li><?php the_field('phy_add2');?></li>
                            <li><?php the_field('phy_add3');?></li>

                        </ul>
                    </div>
                    <div class="divide-3 mid-contact">
                        <h4><?php the_field('mail_add');?></h4>
                        <ul>
                            <li><?php the_field('mail_add1');?></li>
                            <li> <?php the_field('mail_add4');?></li>
                            <li><?php the_field('mail_add3_');?></li>
						    <li><?php the_field('mail_add5');?></li>
                        </ul>
                    </div>
                    <div class="divide-3 last-contact">
                        <h4><?php the_field('call_detail');?></h4>
                        <ul>
                            <li><a href="tel:<?php the_field('call_d1');?>"><?php the_field('call_d1');?></a></li>
                          <!--  <li><?php the_field('call_d2');?></li>
                            <li><?php the_field('call_d3');?></li> -->
                        </ul>
                    </div>

                </div>
            </div>


        <div class="three-col">
                <div class="row">
                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field('video_heading',5);?></h3>
                    <div class="img-holder">
					 <a class="html5lightbox" data-height="400" data-width="800"  href="<?php the_field('video_url',5);?>"><img src="<?php the_field('video_image',5); ?>" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field("architect_heading",5);?></h3>
                    <div class="img-holder">
                        <a href="<?php echo esc_url( get_permalink(8) ); ?>"><img src="<?php the_field('architect_image',5); ?>" class="img-responsive" /></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field("quote_heading",5);?></h3>
                    <div class="img-holder">
                        <a href="<?php echo esc_url( get_permalink(18) ); ?>"><img src="<?php the_field('quote_image',5); ?>" class="img-responsive" /></a>
                    </div>
                </div>
                </div>
            </div>



         <div class="client-col">
               <div id=hangar-clients class="owl-carousel">
			   <?php
	
                          $my_query = new WP_Query('post_type=client_slider&posts_per_page=-1');
                              $i=1;
                                 while ($my_query->have_posts()) : $my_query->the_post(); 
	                         ?>
                <div class="item <?php if($i==1) { echo 'active'; } ?>">
				<a href="<?php the_field('client_url');?>"target="_blank"><?php echo the_post_thumbnail('full'); ?>
				</a>
				</div>
				 <?php  
                                         $i++;
                             endwhile;
							 wp_reset_query(); ?>
                
                    
              </div>
            </div>
                <!--<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients.jpg" class="img-responsive" />
                <!--div id="myCarousel1" class="carousel slide">

                        <!-- Carousel items -->
                <!--div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-2 col-xs-2"><a href="#x col-xs-6" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-2 col-xs-2"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                </div>
                                <!--/row-->
                <!--/div>
                            <!--/item-->
                <!--div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6"><a href="#x col-xs-6" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                </div>
                                <!--/row-->
                <!--/div>
                            <!--/item-->
                <!--div class="item">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    <div class="col-sm-3 col-xs-6"><a href="#x" class="thumbnail">Hello</a>
                                    </div>
                                    ></div>
                                <!--/row-->
                <!--/div>
                            <!--/item-->
                <!--/div>
                        <!--/carousel-inner-->
                <!--a class="left carousel-control" href="#myCarousel1" data-slide="prev"><i class="fa fa-chevron-left fa-4"></i></a>

                        <a class="right carousel-control" href="#myCarousel1" data-slide="next"><i class="fa fa-chevron-right fa-4"></i></a>
                    </div>
                    <!--/myCarousel-->
            
                 
<div class="client-content wow bounceInUp row">
<h1><?php the_field("our_process_heading",5);?></h1>
              
			   <?php 
			   $i=1;
	         $my_query = new WP_Query('post_type=process&posts_per_page=5&orderby=date&order=ASC');
                   while ($my_query->have_posts()) : $my_query->the_post(); 			
				   ?>
               <div class="process">
			        
			      <a href="<?php the_field("url"); ?>" target="_blank"><span><?php echo the_post_thumbnail('full') ?></span>
				  <p class="steps">Step <?php echo $i ?>.</p>
                   <h4><?php the_title();?></h4>
                   <p><?php the_content(); ?></p>
				   </a>
               </div>
			   <?php
			   $i++;
                endwhile;
							 wp_reset_query(); ?>
           </div>
</div>
 
    </section>
    <!-- Content Section Ends-->


   <?php get_footer(); ?>