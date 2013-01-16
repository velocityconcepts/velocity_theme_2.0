<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

	<div id="content">
		<div id="contact_header">
        </div>
        
        <div id="contact">
        
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
		</div>
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	</div>
   
   </div>
    
    <div style="clear:both;"></div>
    


<?php get_footer(); ?>