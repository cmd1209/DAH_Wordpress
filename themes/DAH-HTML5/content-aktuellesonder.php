<?php
/**
 * The template for displaying posts in the Status post format
 */
?>
<article class="aktuellsonder" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h3><?php the_title(); ?></h3>
<p><strong><?php the_field('zeitraum'); ?></strong></p>
<p><?php the_excerpt(20); ?></p>
<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
}  ?>

</article>