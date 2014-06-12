<?php get_header(); ?>
	
<div class="pageheadline">
	<div class="pheadline-inside">
		<h1><?php _e( 'Archives', 'html5blank' ); ?></h1>
		<ul>
      <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order')); foreach ($anchorlinks as $page): ?>
      <?php $content = $page->post_content; ?>
      <li><a href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
</div>
	
	<!-- section -->
	<section role="main">

	
		<?php get_template_part('loop'); ?>
		
		<?php get_template_part('pagination'); ?>
	
	</section>
	<!-- /section -->
	

<?php get_footer(); ?>