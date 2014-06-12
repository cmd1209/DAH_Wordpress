<?php
/* Template Name: speisesaal-Template
*/ 
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal01.jpg"></img></div>
	<div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal02.jpg"></img></div>
	<div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal03.jpg"></img></div>
	<div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal04.jpg"></img></div>
</div> 

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
		<?php the_field('col1'); ?>
	</div>
	<div class="grid-cell">
		<?php the_field('col2'); ?>	
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