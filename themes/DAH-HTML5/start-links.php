<?php
/* Template Name: start-links
*/ 
?>
<?php get_header(); ?>

<div class="keyvisual" id="slideshow">
	<div class="slides"><img src="<?php the_field('start-slideshow'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow2'); ?>"></img></div>
	<div class="slides"><img src="<?php the_field('start-slideshow3'); ?>"></img></div>
</div>

	<!-- section -->
	<section role="main" class="startfields">

<div class="col col33">
<?php
$post_object = get_field('links');
if( $post_object ): 
 	// override $post
	$post = $post_object;
	setup_postdata( $post ); 
	?>
    <div class="panel-grid-cell">
    	<figure class="startthumb"><?php the_post_thumbnail('thumbnail'); ?></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php echo excerpt(15); ?> </p>
    	<a class="mehrlesen" href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>	
</div>
<div class="col col33">
<?php
 
$post_object = get_field('mitte');
 
if( $post_object ): 
 
	// override $post
	$post = $post_object;
	setup_postdata( $post ); 
 
	?>
    <div class="panel-grid-cell">
    	<figure class="startthumb"><?php the_post_thumbnail('thumbnail'); ?></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php echo excerpt(15); ?> </p>
    	<a class="mehrlesen" href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>	
	
</div>
<div class="col col33">
<?php
 
$post_object = get_field('rechts');
 
if( $post_object ): 
 
	// override $post
	$post = $post_object;
	setup_postdata( $post ); 
 
	?>
    <div class="panel-grid-cell">
    	<figure class="startthumb"><?php the_post_thumbnail('thumbnail'); ?></figure>
    	<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    	<p> <?php echo excerpt(15); ?> </p>
    	<a class="mehrlesen" href="<?php the_permalink(); ?>">mehr lesen</a>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>	
	
</div>

<br class="clear">
	
	</section>
	<!-- /section -->


<?php get_footer(); ?>