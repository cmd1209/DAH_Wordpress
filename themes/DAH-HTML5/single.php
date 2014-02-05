<?php get_header(); ?>

<?php if ( '' != get_the_post_thumbnail() ) { ?> <!-- checks if keyvisual is present -->
<div class="keyvisual">
	<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
</div>
	<?php  } else { ?>
<div class="nokeyvisual">
</div>
<?php  } ?>  
	
	<!-- section -->
	<section role="main">
		<div class="offset">
		</div>
	
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<div class="grid">
			<div class="grid-70 L">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>				
			</div>
			<div class="grid-30 R">
				<h2 class="post_cat"><?php the_category(); ?></h2>
				<div class="post_highlights"><?php the_field('post_highlights'); ?></div>
			</div>
		</div>

<br class="clear">
		
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
		
	<?php endif; ?>
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>

