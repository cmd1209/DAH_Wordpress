<?php get_header(); ?>

<?php if ( '' != get_the_post_thumbnail() ) { ?> <!-- checks if keyvisual is present -->
<div class="keyvisual">
	<?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?>
</div>
	<?php  } else { ?>
<div class="nokeyvisual">
</div>
<?php  } ?>  

<div class="pageheadline">
<div class="pheadline-inside">
	<h1><?php the_title(); ?></h1>
	<ul>
	<?php
	$anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', ) );

	foreach( $anchorlinks as $page ) {		
		$content = $page->post_content;

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
		<div class="offset">
		</div>
	
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<?php the_content(); ?>

<?php
	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', ) );

	foreach( $mypages as $page ) {		
		$content = $page->post_content;
		// Get the 2 meta values from the child page
		$getcol1 = get_post_meta($page->ID, 'col1', true); 
        $getcol2 = get_post_meta($page->ID, 'col2', true); 
		
		$content = apply_filters( 'the_content', $content );
		$getcol1 = apply_filters( 'the_content', $getcol1 );
		$getcol2 = apply_filters( 'the_content', $getcol2 );

	?>
		<div class="subarticle">
			<a href="#" class="anchorlink" id="<?php echo $page->post_title; ?>"></a>
			<h2><span><?php echo $page->post_title; ?></span></h2>
			<div class="entry"><?php echo $content; ?></div>
			<div class="grid">
			<?php if($getcol1 !== '') { ?>
				<?php echo "<div class='grid-cell L'>". $getcol1."</div>"; ?>
			<?php } ?>
			<?php if($getcol2 !== '') { ?>
				<?php echo "<div class='grid-cell R'>". $getcol2."</div>"; ?>
			<?php } ?>
			</div>
		</div>
	<?php
	}
?>

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