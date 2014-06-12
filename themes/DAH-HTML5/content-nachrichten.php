<?php
/**
 * The template for displaying posts in the Status post format
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<ul class="upcoming-events" style="padding-left:0;">
	<li class="past-event" >
		<div class="event" style="padding-bottom: 20px;">
			<div class="triangle"></div>
			<h3><?php the_title(); ?></h3>
				
			<?php if ( get_the_post_thumbnail($post_id) != '' ) {

  echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
   the_post_thumbnail( 'thumbnail');
  echo '</a>';

} else {

 echo '<a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
 echo '<img src="';
 echo catch_that_image($page->ID, 'thumbnail');
 echo '" alt="" />';
 echo '</a>';

} ?>


				
			<p><strong><?php the_time('F 	j, Y'); ?></strong> | <?php the_excerpt(); ?></p>
			

		</div>
	</li>
</ul>
</article>

