<?php get_header(); ?>


  <div class="nokeyvisual">
  </div>	


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


	<!-- section -->
	<section role="main">
		<div class="offset">
		</div>
	
	
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-header">
		<h1 class="article-title"><?php the_title(); ?></h1>
		<p><strong><?php the_field('subheadline'); ?></strong></p>
	</div>	
	<?php the_content(); ?>				

<br class="clear">

</article>
		<!-- /article -->
		
	<?php endwhile; ?>
		
	<?php endif; ?>
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>

