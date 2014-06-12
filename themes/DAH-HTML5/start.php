<?php
/* Template Name: start
*/ 
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>

	<div class="popspacer">   <!-- container for popups -->


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
	<div class="startpopups">
	<div class="grid">
	
	<?php the_content(); ?>

</div>
</div>
		
	<?php endwhile; ?>
	

	<?php endif; ?>
	


<?php get_footer(); ?>