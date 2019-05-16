<?php
/*Template for single instances of services custom post type
*/

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$image= get_field('image_illustration');
			$size= "full"; ?>

				<article class="individual-services">
					<aside class="services-sidebar">
						<h3><?php the_title(); ?></h3>
								<?php the_content();?>

				</aside>

				<div class="services-images">
					<?php echo wp_get_attachment_image($image,$size); ?>


				</div>
				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
