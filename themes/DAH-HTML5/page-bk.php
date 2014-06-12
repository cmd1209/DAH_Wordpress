<a href="#" id="oben"></a>
<?php get_header(); ?>

<?php if (is_page(array('museum'))): ?>
  <div id="rundgang" class="keyvisual">
   <a href="#" id="start">Rundgang</a>
   <a href="#" id="prev"><</a>
   <a href="#" id="next">></a>
   <div class="rcontainer">
    <figure>
     <?php $raum0 = get_field('raum0'); ?><img src="<?php echo $raum0['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum1 = get_field('raum1'); ?><img src="<?php echo $raum1['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum2 = get_field('raum2'); ?><img src="<?php echo $raum2['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum3 = get_field('raum3'); ?><img src="<?php echo $raum3['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum4 = get_field('raum4'); ?><img src="<?php echo $raum4['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum5 = get_field('raum5'); ?><img src="<?php echo $raum5['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum6 = get_field('raum6'); ?><img src="<?php echo $raum6['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum7 = get_field('raum7'); ?><img src="<?php echo $raum7['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum8 = get_field('raum8'); ?><img src="<?php echo $raum8['url']; ?>"/>
   </figure>
  <figure>
     <?php $raum9 = get_field('raum9'); ?><img src="<?php echo $raum9['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum10 = get_field('raum10'); ?><img src="<?php echo $raum10['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum11 = get_field('raum11'); ?><img src="<?php echo $raum11['url']; ?>"/>
   </figure>
    <figure>
     <?php $raum12 = get_field('raum12'); ?><img src="<?php echo $raum12['url']; ?>"/>
   </figure>
  <figure>
     <?php $raum13 = get_field('raum13'); ?><img src="<?php echo $raum13['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum14 = get_field('raum14'); ?><img src="<?php echo $raum14['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum15 = get_field('raum15'); ?><img src="<?php echo $raum15['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum16 = get_field('raum16'); ?><img src="<?php echo $raum16['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum17 = get_field('raum17'); ?><img src="<?php echo $raum17['url']; ?>"/>
   </figure>
   <figure>
     <?php $raum18 = get_field('raum18'); ?><img src="<?php echo $raum18['url']; ?>"/>
   </figure>
 </div>
</div>
<?php elseif (is_page(array('speisesaal'))): ?>
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

<div class="rundganginfo">
  <div class="rundganginfocontainer">
   <div>
    <h2><?php echo $raum0['title']; ?></h2>
    <p><?php echo $raum0['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum1['title']; ?></h2>
    <p><?php echo $raum1['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum2['title']; ?></h2>
    <p><?php echo $raum2['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum3['title']; ?></h2>
    <p><?php echo $raum3['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum4['title']; ?></h2>
    <p><?php echo $raum4['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum5['title']; ?></h2>
    <p><?php echo $raum5['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum6['title']; ?></h2>
    <p><?php echo $raum6['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum7['title']; ?></h2>
    <p><?php echo $raum7['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum8['title']; ?></h2>
    <p><?php echo $raum8['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum9['title']; ?></h2>
    <p><?php echo $raum9['description']; ?></p>
  </div>
 <div>
    <h2><?php echo $raum10['title']; ?></h2>
    <p><?php echo $raum10['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum11['title']; ?></h2>
    <p><?php echo $raum11['description']; ?></p>
  </div>
   <div>
    <h2><?php echo $raum12['title']; ?></h2>
    <p><?php echo $raum12['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum13['title']; ?></h2>
    <p><?php echo $raum13['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum14['title']; ?></h2>
    <p><?php echo $raum14['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum15['title']; ?></h2>
    <p><?php echo $raum15['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum16['title']; ?></h2>
    <p><?php echo $raum16['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum17['title']; ?></h2>
    <p><?php echo $raum17['description']; ?></p>
  </div>
  <div>
    <h2><?php echo $raum18['title']; ?></h2>
    <p><?php echo $raum18['description']; ?></p>
  </div>
</div>
</div>

<div class="pageheadline">
	<div class="pheadline-inside">
		<h1><?php the_title(); ?></h1>
		<ul>
      <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date')); foreach ($anchorlinks as $page): ?>
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
			<?php if (is_page(array('museum'))): ?>
       <li><a href="#rundgang">Rundgang</a></li>				
     <?php else: ?>
     <?php endif ?>
     <?php $anchorlinks = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date')); foreach ($anchorlinks as $page): ?>
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