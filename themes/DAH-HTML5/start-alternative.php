<?php
/* Template Name: start-alternative
*/ 
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>

	<!-- section -->
	<section role="main" class="startfields">

	<?php the_content(); ?>				

<br class="clear">
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>