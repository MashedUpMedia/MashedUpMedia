<?php
/**
 * @package FionaGrayMedia
 * @by mashedupmedia
 */

get_header(); ?>
		<div id="main" role="main">
			<section id="maincontent">
				<div class="blog_content">
				<?php
				get_template_part( 'loop', 'index' );
				?>
				</div>
			<div id="sidebar">
				<?php get_sidebar(); ?>
			</div>
			</section>


		</div> <!--! end of #container -->
	</div>


			<?php 
			get_footer(); ?>



