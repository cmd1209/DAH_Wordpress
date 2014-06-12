<?php
/* Template Name: filme-Template
*/ 
?>
<?php get_header(); ?>


<div class="pageheadline">
<div class="pheadline-inside">
	<h1><?php the_title(); ?></h1>
</div>
</div>


<!-- section -->
<section role="main">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<br class="clear">
<?php edit_post_link(); ?>
</article>
	<?php endwhile; ?>
		
	<?php endif; ?>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>