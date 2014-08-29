<?php
/**
 * The template for displaying posts in the Status post format
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<ul class="upcoming-events" style="padding-left:0;">
	<li>
	<div>
			<h3><?php the_title(); ?></h3>
				


			<?php if ( has_post_thumbnail()) : ?>
   <a style="margin:0 10px 10px 0;float:left;" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   <?php the_post_thumbnail('large'); ?>
   </a>
 <?php endif; ?>

				
			<p><strong><?php the_time('F 	j, Y'); ?></strong> | <?php the_excerpt(20); ?></p>
			

		</div>
	</li>
</ul>
</article>