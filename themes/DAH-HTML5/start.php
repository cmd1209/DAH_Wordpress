<?php
/* Template Name: start
*/ 
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div>
		<img src="<?php the_field('start-slideshow'); ?>"></img>
	</div>
	<div>
		<img src="<?php the_field('start-slideshow2'); ?>"></img>
	</div>
	<div>
		<img src="<?php the_field('start-slideshow3'); ?>"></img>
	</div>
</div>


	<div style="height:175px; position:relative; overflow:visible;">   <!-- container for popups -->


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<div class="startpopups">
	<div class="grid">

	<div class="grid-cell-popup popup-box innershadow">
		<?php $post_object = get_field('links-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		  <p><?php the_field('links-sichtbar-text'); ?></p>
		  <p><?php the_field('links-hidden-text'); ?></p>

		<?php $post_object = get_field('links-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <a href="<?php the_permalink(); ?>">mehr lesen</a>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<div class="grid-cell-popup popup-box innershadow">
		<?php $post_object = get_field('mitte-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		  <p><?php the_field('mitte-sichtbar-text'); ?></p>
		  <p><?php the_field('mitte-hidden-text'); ?></p>

		<?php $post_object = get_field('mitte-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <a href="<?php the_permalink(); ?>">mehr lesen</a>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	<div class="grid-cell-popup popup-box innershadow">
		<?php $post_object = get_field('rechts-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>

		  <p><?php the_field('rechts-sichtbar-text'); ?></p>
		  <p><?php the_field('rechts-hidden-text'); ?></p>

		<?php $post_object = get_field('rechts-post');
		  if( $post_object ): $post = $post_object; setup_postdata( $post ); ?>
    	  <a href="<?php the_permalink(); ?>">mehr lesen</a>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>

	</div>  <!-- container for popups -->


</div>
</div>
		
	<?php endwhile; ?>
	

	<?php endif; ?>
	


<?php get_footer(); ?>