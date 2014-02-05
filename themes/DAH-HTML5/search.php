<?php get_header(); ?>

<section role="main">
<article>
	<div class="grid">
		<div class="grid70 L">
			<h2><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h2>
			 <?php get_template_part('loop'); ?>
			 <?php get_template_part('pagination'); ?>
		</div>
		<div class="grid30 R">
			<h2 class="post_cat"><?php the_category(); ?></h2>
		</div>
	</div>

</article>
</section>


<?php get_footer(); ?>