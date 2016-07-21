
<?php /* Template Name: Architect */ ?>

  <?php get_header(); ?>
  

 <?php
 while (have_posts()) : the_post(); 
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
   <div class="common-content arctct">

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                     <h2><?php the_title(); ?></h2>
				     <p><?php the_content($post_id); ?></p>
                 </div>
				<div class="success" style="display:none;">
                <div id="success_form" >
						   <h2> SUCCESS!!!</h2>
				 </div>
				 </div>

                <div class="col-lg-offset-1 col-lg-5 col-md-offset-1 col-md-5 col-sm-12 col-xs-12">
				<form   class="steel-frm" role="form" id="signupForm" method="post" novalidate="novalidate" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="firstName"><i class="fa fa-user" aria-hidden="true"></i>First Name</label>
                            <input type="text" name="firstname" id="firstname" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="lastName"><i class="fa fa-user" aria-hidden="true"></i>Last Name</label>
                            <input type="text" name="lastname" id="lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number"><i class="fa fa-mobile" aria-hidden="true"></i> Phone
                            </label>
                            <input type="text" name="phone" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Email</label>
                            <input type="email" name="email" class="form-control" id="email">
                        </div>


                        <div class="radio">
                            <label>Please Contact me By : </label>
                            <label>
                                Phone
                                <input id="phn" type="radio" name="optionsRadios1" value="Phone">
                            </label>

                            <label>
                                Email
                                <input id="email1" type="radio" name="optionsRadios1" value="Emaiil" checked>
                            </label>
                        </div>

                       <!-- <div class="radio">
                            <label>Architect : </label>
                            <label>
                                Building
                                <input type="radio" name="optionsRadios2" value="Building" checked>
                            </label>

                            <label>Manufacture
                                <input type="radio" name="optionsRadios2" value="Manufacture">
                            </label>
                        </div>-->
                        <div class="form-group doc-arc">
                            <label for="exampleInputFile">Attachment :</label>
                            <!--<input type="file" class="inputfile" name="uploaded"  value="upload">-->
							<input id="file_upload" name="filee" type="file" multiple="true" class="valid inputfile" onchange="change_file_stru();">
                            <label>Browse</label>
                            <arcfilename>No file selected</arcfilename>
							
							<label class="unique"> (these files should be accepted "docx,doc,png,xlsx,xls,mp4,pdf,mp3,bmp,jpg,tiff,txt,jpeg,dwg")
						       </label>
                        </div>
						
						
						
                         <div class="form-group">
                                <label for="Email1"><i class="fa fa-envelope" aria-hidden="true"></i> Message
                                </label>
                                <textarea id ="msg" name="msg" placeholder="2000 characters MAX" ></textarea>
                            </div>
						
                        
						<div class="g-recaptcha" data-theme="dark" data-sitekey="6LeL2yITAAAAAGHXVNR3WUijLTIjCby4vATh-6c4" data-callback="recaptchaCallback"></div>
                       <div class="form-group">
                         </div>
					   <button id="submit" class="btn btn-default"  disabled>Submit</button>
					   <div class="error-form form_one" style="display:none;">
					   <div id="error_form" >
						   <h2> Please fill all the required fields</h2>
				    </div>
					</div>
                    </form>
					<div id="loading_sec" style="display:none" align="center">
						   <img src="<?php echo  get_template_directory_uri(); ?>/images/loading1.gif" id="loader">
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
                   <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/clients.jpg" class="img-responsive" />
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
	<?php endwhile; ?>
    <!-- Content Section Ends-->
 

     <?php get_footer(); ?>


	