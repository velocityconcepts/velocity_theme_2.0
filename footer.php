<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Velocity
 * @since Velocity 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="footer_widgets">

			<?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with four columns of widgets.
                 */
                get_sidebar( 'footer' );
            ?>
		</div><!-- #footer_widgets -->
        <div id="footer-bottom">
        	<div id="footer-bottom-left">
				<ul>
                	<li id="social-rss"><a href="#" title="Velocity Concepts RSS"><span>RSS</span></a></li>
                    <li id="social-facebook"><a href="#" title="Velocity Concepts Facebook"><span>Facebook</span></a></li>
                    <li id="social-twitter"><a href="#" title="Velocity Concepts Twitter"><span>Twitter</span></a></li>
                    <li id="social-flickr"><a href="#" title="Velocity Concepts Flickr"><span>Flickr</span></a></li>
                </ul>
			</div><!-- #credits -->
			<div id="footer-bottom-right">
				<?php wp_nav_menu( array( 'container_class' => 'footer-nav', 'theme_location' => 'footer' ) ); ?>
			</div><!-- #site-info -->
    	</div><!-- footer-bottom -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php wp_footer(); ?> 

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.easing.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.spasticNav.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/slides.jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.masonry.min.js"></script> 
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.portfolio.min.js"></script>

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.prettyPhoto.js"></script>    

<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/scripts.js"></script>

</body>
</html>
