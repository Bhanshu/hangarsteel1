
<?php 
global $post;
$slug = $post->post_name;
// echo "<pre>";
// print_r($post);
// echo "</pre>";
get_header();

?><?php
function get_numerics ($str)
{
	preg_match_all('/\d+/', $str, $matches);
	return $matches[0];
}
?>
  <?php 
  
   $id= get_the_ID();
  ?>

    <!-- Banner Section Starts-->
    <section class="banner">
        <div class="container">

           <div class="banner-slider wow bounceInUp">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
							  <?php  $one1 = get_post_meta($id,'slider',true); ?>
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
					 
	<?php  $one1 = get_post_meta($id,'slider',true); ?>
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



            <div class="common-content product-area">
                <div class="col-lg-3 col-md-4 product-sidebar">
                    <div class="p-list">
                        <h3><?php the_field('product_title',12);?></h3>
                        <ul>
                           <?php
							global $post;
							query_posts( array ( 'post_type' => 'products' ,'posts_per_page' => 5 , 'order' => 'ASC')  ); ?>
							<?php while ( have_posts() ) : the_post();
								if($slug == $post->post_name)
{

							?>
                             <li class="actv"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></li>
							<?php 
									}
									else
									{
									?>
									<li><a  href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title();?></a></li>
									<?php
									}
							endwhile; wp_reset_query();
							?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 product-inner">
				<?php
                            if ( have_posts() ) :
							 while (have_posts()) : the_post(); 
							 ?> <div class="button_sec">
							
							 <a href="javascript:void(0);" class="check_id" onclick="check_cate(this.id);" id="<?php echo $post->post_name;?>"><?php echo get_the_title(185); ?></a>
							  <h1><?php the_title(); ?></h1>
							
							 </div>
                          <?php the_content(); ?>
						       
                           <a class="call" href="tel:<?php the_field('footer_subbb_add',5);?>"> <?php the_field('call_product',5);?> <?php the_field('footer_subbb_add',5);?></a>
                             
							  <?php
							    endwhile;
					              endif;
							   ?>
							     <!-- main slider carousel -->
       <!--<div data-example-id="simple-carousel" class="product-slider"> 
           <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox"> 
			 <?php  $one1 = get_post_meta($post->ID,'gallery',true); ?>
							    <?php
                                           $arr1=get_numerics($one1);
										   $i=1;
                                           foreach($arr1 as $val1)
                                           {
											$val1;

											$small_image_url1 = wp_get_attachment_image_src($val1, 'full');
											?>
											<div class=" item <?php if($i==1) { echo 'active'; } ?>"> <img src="<?php echo $small_image_url1[0]; ?>" alt=""> </div>
											<?php
											$i++;							
										   }
										   ?>
           
                
                
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i> <span class="sr-only">Previous</span> </a> 
               <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i><span class="sr-only">Next</span> </a>
                
               </div>
               
               
               <ol class="carousel-indicators">
			      <?php
                                           $arr1=get_numerics($one1);
										   $i=1;
										   $j=0;
                                           foreach($arr1 as $val1)
                                           {
											$val1;

											$small_image_url1 = wp_get_attachment_image_src($val1, 'product_gallery');
											?>
											<li data-target="#carousel-example-generic" data-slide-to="<?php echo $j; ?>"  class="thumb <?php if($i==1) { echo 'active'; } ?>"><img src="<?php echo $small_image_url1[0]; ?>" class="img-responsive"></li>
											<?php
											$i++;							
											$j++;							
										   }
										   ?>
                  
               </ol>
           </div>
                    </div>-->
           <!-- main slider carousel -->
		   <div class="">
   <ul class="light-gal">
   <?php  $one1 = get_post_meta($post->ID,'gallery',true); ?>
		<?php
		   $arr1=get_numerics($one1);
		   $i=1;
		   foreach($arr1 as $val1)
		   {
			$val1;

			$small_image_url1 = wp_get_attachment_image_src($val1, 'full');
			?>
			 
       <li><a class="html5lightbox" data-group="set1" data-lightbox="example-set" href="<?php echo $small_image_url1[0]; ?>"><img src="<?php echo $small_image_url1[0]; ?>" class="img-responsive"></a></li>
	   <?php 
		   }
		   ?>
       <!--<li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
                       
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
                       
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>
       <li><a href=""><img src="images/product-inner-thumb01.jpg" class="img-responsive"></a></li>-->
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
			        
			      <a href="<?php the_field("url"); ?>" target="_blank" ><span><?php echo the_post_thumbnail('full') ?></span>
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
	<script>
	jQuery(document).ready(function(){
		jQuery("#menu-item-80").addClass("current-menu-item")
	});
	function check_cate(event)
	{
		var test = jQuery(".check_id").attr("id");
		jQuery.ajax({
        type: "GET",
        url:"<?php echo site_url(); ?>/wp-content/themes/hanger-steel/ajax/Productseesion.php",
        data:{test:test,format:'raw'},
        success:function(resp){
            window.location.href = '<?php echo esc_url( get_permalink(185) ); ?>';

        }
        })
	}
	</script>
    <!-- Content Section Ends-->
<?php
							  get_footer();
							  ?>
							  