<a href="#" id="oben"></a>
<?php get_header(); ?>

<?php if (is_page(array('speisesaal'))): ?>
  <div class="keyvisual" id="slideshow">
  <div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal01.jpg"></img></div>
  <div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal02.jpg"></img></div>
  <div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal03.jpg"></img></div>
  <div class="slides"><img src="<?php echo home_url(); ?>/wp-content/uploads/2014/02/Speisesaal04.jpg"></img></div>
</div> 	
<?php else: ?>
  <?php if ('' != get_the_post_thumbnail()): ?>
    <div class="keyvisual">
     <div class="slides"><?php echo get_the_post_thumbnail( $post_id, $size, $attr ); ?></div>
   </div>	
 <?php else: ?>
  <div class="nokeyvisual">
  </div>	
  <?php endif ?>
<?php endif ?>

<div class="pageheadline">
	<div class="pheadline-inside">
		<h1><?php the_title(); ?></h1>
		<ul>
      <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order')); foreach ($anchorlinks as $page): ?>
      <?php $content = $page->post_content; ?>
      <li><a href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
    <?php endforeach ?>
  </ul>
</div>
</div>

<div class="stickymenu coolshadow">
	<nav>
		<ul>
			<li><a href="#oben">Oben</a></li>
     <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'menu_order')); foreach ($anchorlinks as $page): ?>
     <?php $content = $page->post_content; ?>
     <li><a class="nav-link" href="#<?php echo $page->ID; ?>"><?php echo $page->post_title; ?></a></li>
   <?php endforeach ?>
 </ul>
</nav>
</div>

<!-- section -->
<section role="main">
	<div class="offset">
	</div>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

            <?php $children = get_pages( 
    array(
        'sort_column' => 'menu_order',
        'sort_order' => 'ASC',
        'hierarchical' => 0,
        'parent' => $post->ID,
    ));

foreach( $children as $post ) { 
        setup_postdata( $post ); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="subarticle" id="<?php the_ID(); ?>">
    <h1 class="divisions"><span><?php the_title(); ?></span></h1>
    <?php the_content(); ?>
    </div>

    </article>
<?php } ?>

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