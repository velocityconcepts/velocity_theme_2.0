<?php
/*
Template Name: Portfolio Page
*/
?>
<?php get_header(); ?>
	<div id="container" class="one-column">
        <div id="content-wrap" role="main">
		<div class="before-portfolio">
        	<h2>Our Work</h2>
            <p>Browse our work, you will find that we have done it all. From helping businesses gain a unique idenity to building a long lasting online presence and everything in between.</p>
        </div>
        <div id="portfolio">
        
        	<ul id="filtering-nav">
            	<li class="active"><a class="all" href="#all">Filter &rarr;</a></li>
                <li><a class="branding-port" href="#branding-port">Branding</a></li>
                <li><a class="print" href="#print">Print</a></li>
                <li><a class="web" href="#web">Web</a></li>
                <li><a class="photography" href="#photography">Photography</a></li>
                <li><a class="video-portfolio" href="#video-portfolio">Video</a></li>
            </ul>
            
            <div class="divider"></div>
            <div class="clear"></div>
            <div class="items">
				<?php 
				$query = new WP_Query( array('post_type' => 'portfolio') );    
                while ( $query->have_posts() ) : $query->the_post(); ?>
                
                  <!-- Begin Item -->
                  
                  <div class="box col4 <?php $categories = get_the_category(); foreach($categories as $category) { echo $category->slug . ' '; } ?>">
                  
                    <a href="#<?php echo basename(get_permalink()); ?>">
                    	<span class="overlay open">
                            <strong>
                                <?php echo the_title(); ?>
                            </strong>
                            <em>
								<?php echo get_post_meta($post->ID, 'ecpt_port_tags', true); ?>
                            </em>
                      	</span>
							<?php the_post_thumbnail( 'portfolio-thumb' ); ?>
                   	</a>
                    
                    <!-- Begin Block -->
                    
                    <div class="container">
                    <!-- Begin Slider -->
                    <div class="slides">
                        <div class="slides_container">
                          <!--  <img src="/style/images/art/web1-2-full.jpg" width="700" height="450" alt="">
                            <img src="/style/images/art/web1-full.jpg" width="700" height="450" alt="">
                          -->
                        <?php
						$check_vid = get_post_meta($post->ID, 'ecpt_port_video', true);
						if (!empty($check_vid)) {  
							echo get_post_meta($post->ID, 'ecpt_port_video', true); 
						} else {
							$images = get_post_meta($post->ID, 'ecpt_port_images', true);
							if($images) :
								foreach($images as $image) :
									echo '<a href="'.$image.'" rel="prettyPhoto[gallery='.get_the_ID().'"><img src="'.$image.'" width="700" height="450"/></a>';
								endforeach;
							endif; 
						}
						
						echo '<script>
							$(document).ready(function(){
								$("a[rel^=\'prettyPhoto\']").prettyPhoto({autoplay_slideshow: false, social_tools:false, deeplinking: false, theme:\'pp_default\', slideshow:5000});
							});
						</script>';
						
						?>
                        </div>
                        <a href="#" class="prev"></a>
                        <a href="#" class="next"></a>
                    </div>
                    <!-- End Slider -->
                    <!-- Begin Content -->
                    <div class="content">
                    	
                       	<h2><?php echo the_title(); ?></h2>
                        
                        <p><?php echo the_content(); ?></p>
                        
                        <div class="meta">
                        	
							<?php
							if(get_post_meta($post->ID, 'ecpt_port_client', false)) : ?>   
                            	<span><em>Client:</em> <?php echo get_post_meta($post->ID, 'ecpt_port_client', true); ?></span>
                            <?php endif; 
							if(get_post_meta($post->ID, 'ecpt_port_link', false)) : ?>    
                            	<span><em>Launch Project:</em> <a href="<?php echo get_post_meta($post->ID, 'ecpt_port_link', true); ?>"><?php echo get_post_meta($post->ID, 'ecpt_port_link', true); ?></a></span>
                            <?php endif; ?> 
                                
                        </div>
                    </div>
                    <!-- End Content -->
                    <div class="clear"></div><div class="divider"></div>
                    
                    </div>
                    
                    <!-- End Block -->
                  </div>
                  <!-- End Item -->
                  
                  
                <?php endwhile;	?>
            </div><!-- .wrap -->
        </div><!-- #portfolio -->
        
    </div><!-- #container -->

<?php get_footer(); ?>