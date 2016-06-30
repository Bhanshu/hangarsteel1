
<?php /* Template Name: product inner1 */ ?>
  <?php get_header(); ?>

    <!-- Banner Section Starts-->
    <section class="banner">
        <div class="container">

            <div class="banner-slider">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                     <ol class="carousel-indicators">
					<?php
	
                          $my_query = new WP_Query('post_type=slider&posts_per_page=3');
                              $i=1;
							  $j=0;
                                 while ($my_query->have_posts()) : $my_query->the_post(); 
	                         ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo $j; ?>" class="<?php if($i==1) { echo 'active'; } ?>">
						  
						 </li>
                	 <?php  
					           $j++;
							   $i++;
                       		 endwhile;
							 wp_reset_query(); ?>
                    </ol>
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
					 
                          <?php
	
                          $my_query = new WP_Query('post_type=slider&posts_per_page=3');
                              $i=1;
                                 while ($my_query->have_posts()) : $my_query->the_post(); 
	                         ?>
	                             <div class="item <?php if($i==1) { echo 'active'; } ?>">
		                                  <?php echo the_post_thumbnail('full') ?>
	                             </div>
	
                                <?php  
                                         $i++;
                             endwhile;
							 wp_reset_query(); ?>
                        
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



            <div class="common-content product-area">
                <div class="col-lg-4 product-sidebar">
                    <div class="p-list">
                        <h3><?php the_field('product_title');?></h3>
                        <ul>
                            <li><a href=""><?php the_field('product_sub_title');?></a></li>
                            <li><a href=""><?php the_field('product_content');?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 product-inner">
                    	<?php $my_query = new WP_Query('post_type=products&posts_per_page=-1');
                            if ( have_posts() ) :
							 ?>
							 <h2><?php the_title(); ?></h2>
                           <p><?php    the_content(); ?></p>
							  <?php endif;
							  
							  get_footer();
							   ?>
    <!-- main slider carousel -->
       <div data-example-id="simple-carousel" class="product-slider"> 
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox"> 
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div>
            <div class="item active"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
               <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
                
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div>
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
                
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div>
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
                <div class="item"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-gal01.jpg" alt=""> </div> 
                
                
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span> </a>
                
               </div>
               
               
               <ol class="carousel-indicators">
                   <li data-target="#carousel-example-generic" data-slide-to="0"  class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb01.jpg" class="img-responsive"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="1" class="thumb active"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb02.jpg" class="img-responsive"></li> 
                   <li data-target="#carousel-example-generic" data-slide-to="2" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb01.jpg" class="img-responsive"></li>
                   
                   <li data-target="#carousel-example-generic" data-slide-to="3" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb02.jpg" class="img-responsive"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="4" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb01.jpg" class="img-responsive"></li> 
                   <li data-target="#carousel-example-generic" data-slide-to="5" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb02.jpg" class="img-responsive"></li>
                   
                   <li data-target="#carousel-example-generic" data-slide-to="6" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb01.jpg" class="img-responsive"></li>
                   <li data-target="#carousel-example-generic" data-slide-to="7" class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb02.jpg" class="img-responsive"></li> 
                   <li data-target="#carousel-example-generic" data-slide-to="8"  class="thumb"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/product-inner-thumb01.jpg" class="img-responsive"></li>
               </ol>
           </div>
                    </div>
           <!-- main slider carousel -->
            </div>


            </div>





            <div class="three-col">
                <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow bounceInUp">
                    <h3><?php the_field('video_heading',5);?></h3>
                    <div class="img-holder">
                        <a href=""><img src="<?php the_field('video_image',5); ?>" class="img-responsive" /></a>
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
				<a href="<?php the_field('client_url');?>"><?php echo the_post_thumbnail('full'); ?>
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
                </div>
            </div>
            <div class="client-content">
               <h1><?php the_field('client_content',5);?></h1>
                <h4><?php the_field('client_sub_content',5);?></h4>
                <br>
            </div>



        </div>




        </div>
    </section>
    <!-- Content Section Ends-->

     <?php get_footer(); ?>