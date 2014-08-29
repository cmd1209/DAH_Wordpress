<?php
/**
 * The template for displaying posts in the Status post format
 */
?>


<dl id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<dt style="float:left;padding-right:10px;margin-right:10px;margin-bottom:30px;border-right:1px solid grey;"><?php the_time('Y'); ?>	</dt>
		<dd><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
</dl>



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