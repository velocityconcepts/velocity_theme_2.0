<?php
/*
Template Name: Home Page
*/
get_header(); ?>

		<div id="container" class="one-column">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
            
            <div id="featured-work">
            <h2 id="home-featured-title">Recent Work</h2>
        		<div class="items">
					<?php
                        $query = new WP_Query( array('post_type' => 'portfolio', 'posts_per_page' => 1) );    
                        while ( $query->have_posts() ) : $query->the_post(); 
                    ?>
                    <div class="box">
                      
                        <a href="http://www.velocityconcepts-dev.com/work/#<?php echo basename(get_permalink()); ?>">
                            <span class="overlay">
                                <strong>
                                    <?php echo the_title(); ?>
                                </strong>
                                <em>
                                    <?php echo get_post_meta($post->ID, 'ecpt_port_tags', true); ?>
                                </em>
                            </span>
                                <?php the_post_thumbnail( 'portfolio-thumb' ); ?>
                        </a>
                    </div><!-- Box -->
                    <?php 
                        endwhile;
                        wp_reset_query();
                    ?>
                </div><!-- Items -->
        	</div><!-- Featured Work -->
            <div id="right-home-bottom">
            	<h2>Newsletter</h2>
           	</div>
            <div class="empty"></div>
		</div><!-- #container -->

<?php get_footer(); ?>