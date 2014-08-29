<?php
/**
 * The template for displaying posts in the Status post format
 */
?>


<!-- <dl class="archiv-list">
	<dt><?php the_time('Y'); ?></dt>
	<dd><p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></p></dd>
</dl> -->

<li class="archiv-list">
	<p><?php the_time('Y'); ?> | <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></p>
</li>


<!-- <article style="padding-bottom:40px;" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<dl>
	<dt><h3><span style="color:grey"><?php the_time('Y'); ?></span> | <?php the_title(); ?></h3></dt>
	<dd><p><?php the_excerpt(20); ?></p></dd>
</dl>
</article>
 -->

<!-- 

<ul class="upcoming-events" style="padding-left:0;">
	<li class="past-event" >
		<div class="event" style="padding:0 20px 0 20px;">
			<div class="col col20">
				<?php the_time('Y'); ?>				
			</div>
			<div class="col col80">
				<p><?php the_title(); ?></p>
				<?php the_excerpt(20); ?>
			</div>

		</div>
	</li>
</ul> -->