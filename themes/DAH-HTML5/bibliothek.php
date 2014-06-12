<?php
/* Template Name: bibliothek-Template
*/ 
?>
<?php get_header(); ?>


<div class="pageheadline">
<div class="pheadline-inside">
	<h1><?php the_title(); ?></h1>
	<ul>
	<?php
	$anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', ) );

	foreach( $anchorlinks as $page ) {		
		$content = $page->post_content;
		if ( ! $content ) // Check for empty page
			continue;
	?>	
		<li>
			<a href="#<?php echo $page->post_title; ?>"><?php echo $page->post_title; ?></a>
		</li>
	<?php
	}	
?>
</ul>
</div>
</div>


<!-- section -->
<section role="main">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
<?php the_content(); ?>

<div class="grid">
	<div class="grid-cell">
		<?php the_field('besestaende1'); ?>
	</div>
	<div class="grid-cell">
		<?php the_field('besestaende2'); ?>	
	</div>
</div>


<div class="col100">
	<?php the_field('grafiksammlung'); ?>
</div>


<div class="col100">
	<?php the_field('schenkungen'); ?>
</div>


<div class="grid">
	<div class="grid-cell">
		<?php the_field('foederung1'); ?>
	</div>
	<div class="grid-cell">
		<?php the_field('foederung2'); ?>	
	</div>
</div>

<br class="clear">
<?php edit_post_link(); ?>
</article>
	<?php endwhile; ?>
		
	<?php endif; ?>


	
	</section>
	<!-- /section -->


<?php get_footer(); ?>