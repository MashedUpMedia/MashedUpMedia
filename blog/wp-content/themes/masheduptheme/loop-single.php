<?php
/**
 * @package FionaGrayMedia
 * @by mashedupmedia
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<section id="maincontent">
<div class="blog_content">
<?php if ( function_exists('yoast_breadcrumb') ) {
	yoast_breadcrumb('<p id="breadcrumbs">','</p>');
} ?>
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>

					<div class="entry-content">
						<?php the_content(); ?>
<div class="tags"><p><?php the_tags('Tags: ','  ','<br />'); ?></p></div>
  <p class="meta">Posted by <?php the_author();  ?>
  
on the <?php the_time('jS F Y') ?><br /></p>
<div class="author">





<p class="bio"><?php echo get_avatar( get_the_author_meta('ID'), 80 ); ?> <?php the_author_description(); ?> <br /><br /><a href="<?php the_author_meta('aim'); ?>">Follow <?php the_author();  ?> on Twitter</a><br />
<a href="<?php the_author_meta('yim'); ?>">Follow <?php the_author();  ?> on Facebook</a>




</p>


</div>

					</div><!-- .entry-content -->

<div id="comments">
<?php comments_template(); ?>

</div>
				</div>

</div>
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>

</section>
<?php endwhile; // end of the loop. ?>
</div>
