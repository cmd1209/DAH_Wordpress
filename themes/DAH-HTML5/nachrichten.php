<?php
/* Template Name: Nachrichten
*/ 
?>
<?php get_header(); ?>

<div class="nokeyvisual">
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
<section role="main" style="padding-left:40px;padding-right:40px;">
 <div class="offset">
 	
 </div>

<div class="grid">
	<div class="grid-cell">
				<div class="sonderausstellung shadow">
					<header class="shadow">
						<h2>The Latest News from Bremerhaven</h2>
					</header>
		<?php query_posts('cat=1&posts_per_page=-3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						
						<?php if ('' != get_the_post_thumbnail()): ?>
						<div class="hero">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_post_thumbnail('large'); ?></a>
							<div class="cat"> <?php the_time('F 	j, Y'); ?></div>	
						</div>
						<div class="title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
						</div>
						<?php else: ?>
						<div class="title">
							<div class="year"> <?php the_time('F 	j, Y'); ?></div>	
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
						</div>
						<?php endif ?>
						<div class="excerpt">
							<p><?php the_excerpt(); ?></p>	
						</div>
						<hr>
		<?php endwhile; endif; ?>
				</div>
	</div>

	<div class="grid-cell">
		<div class="sonderausstellung shadow">
			<header class="shadow">
				<h2>Archiv</h2>
			</header>
			<?php query_posts('cat=1&order=DESC&offset=3'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="title">
					<div class="year"><?php the_time('F 	j, Y'); ?></div>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" > <?php the_title(); ?> </a>
					<p><?php echo excerpt(20); ?></p>
				</div>
				<hr>
			<?php endwhile; endif; ?>
		</div>
	</div>

</div>

<br class="clear">

<?php edit_post_link(); ?>

</section>

<!-- /section -->


<?php get_footer(); ?>