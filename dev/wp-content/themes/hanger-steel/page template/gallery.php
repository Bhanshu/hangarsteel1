<?php /* Template Name: gallery */ ?>
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



            <div class="common-content gal">
                <h1><?php the_field('gallery_title');?></h1>
                
                <div class="row gal-opt">
                <div class="col-lg-12">
				<?php
					global $post;
					query_posts( array ( 'post_type' => 'products' ,'posts_per_page' => 5 , 'order' => 'ASC')  ); ?>
					<?php while ( have_posts() ) : the_post();
					?>
                <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12 wow bounceInLeft">
				    <div class="gallery-type img-holder">
                       <a href="<?php the_permalink(); ?>"> <?php if ( has_post_thumbnail() ) 
							{?>
						<img src=" <?php the_field('gallery_img');?>" class="img-responsive" />
							<?php
							}
							else
							{
							?>
							<img src="http://placehold.it/238x192&amp;text=No image found">
							<?php
							}?><span class="gal-overlay"><h3><?php the_field('gallery_title');?></h3></span></a>
                    </div>
							
                    
                </div>
				<?php endwhile; wp_reset_query(); ?>
                </div>
                </div>
                    
            </div>

<style>
    .gal h1 {
    color: #d99a01;
    font-size: 54px;
    font-weight: bold;
    text-align: center;
    text-transform: uppercase;}
</style>






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
				<a href="<?php the_field('client_url');?> "target="_blank"><?php echo the_post_thumbnail('full'); ?>
				</a>
				</div>
				 <?php  
                                         $i++;
                             endwhile;
							 wp_reset_query(); ?>
                
                    
              </div>
            </div>
                         
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