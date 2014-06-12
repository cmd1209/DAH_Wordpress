<?php
/* Template Name: programm
*/ 
?>
<?php get_header(); ?>


  <div class="nokeyvisual">
  </div>	

<div class="pageheadline">
	<div class="pheadline-inside">
		<h1><?php the_title(); ?></h1>
</div>
</div>

<div class="stickymenu coolshadow">
	<nav>
		<ul>
			<li><a href="#oben">Oben</a></li>
       <li><a href="#rundgang">Rundgang</a></li>				
     <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date')); foreach ($anchorlinks as $page): ?>
     <?php $content = $page->post_content; ?>
     <li><a class="nav-link" href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
   <?php endforeach ?>
 </ul>
</nav>
</div>


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
<section role="main">
	<div class="offset">
	</div>
<article>
<!--          <?php the_content(); ?> -->

<?php echo do_shortcode('[my_calendar_upcoming after="" type="event" fallback="No events coming up!" category="Führungen" template="{title} {date}" order="asc" skip="0"]'); ?>

<!-- do_shortcode('[link item="' . $variable . '"]'); -->

	

	
</article>

</section>
		
	<?php endwhile; ?>
	

	<?php endif; ?>
	


<?php get_footer(); ?>