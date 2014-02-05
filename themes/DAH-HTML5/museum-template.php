<?php
/* Template Name: Museum-Template
*/ 
?>
<?php get_header(); ?>

<?php if ( '' != get_the_post_thumbnail() ) { ?> <!-- checks if keyvisual is present -->
<div class="keyvisual">
	<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
</div>
	<?php  } else { ?>
<div class="nokeyvisual">
</div>
<?php  } ?>  

<div class="pageheadline shadow">
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


	
	<!-- section -->
	<section role="main">
		<div class="offset">
		</div>
	
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div style="-webkit-column-count: 2;-webkit-column-gap: 20px;"><?php the_content(); ?></div>


<div class="col col50">
<?php the_field('col1'); ?>
</div>
<div class="col col50">
<?php the_field('col2'); ?>	
</div>
			
			<br class="clear">
			
			<?php edit_post_link(); ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>