<?php
get_header();
if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
}
if (have_posts()) :
   while (have_posts()) : the_post(); 
   ?>
   <div class="post">

   <div class="post_content"> 

   <div class="blogdate">
   	  <div class="date">
   	  	<p><?php the_time('d');?>&nbsp;<?php   the_time('M');?> <?php the_time('Y');?></p>
   	  </div>
   	  <div class="datecorner">
   	  </div>
     </div> 

   <h2 id='post-<?php the_ID() ?>'>
   <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title() ?>">
   
   <?php the_title() ?></a></h2> 
   <?php  
   the_content(); ?>
   <p class="meta">Posted by <?php the_author(); ?>
 on the <?php the_time('jS F Y') ?><br /></p>
<div class="tags"><p><?php the_tags('Tags: ','  ','<br />'); ?></p></div>
   </div>
   




</div>

<?php  
   endwhile;
endif;
?>

