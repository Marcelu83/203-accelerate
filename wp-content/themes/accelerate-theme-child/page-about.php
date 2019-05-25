<?php
/**
 * The template for displaying the About Page
 *
 * This is the template that displays especifically the About page
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing/ChildTheme
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content-about" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<section class="company-services">
		<div class="site-content-services">
		<h3>Our Services</h3>
		<p>We take pride in our clients and the content we create for them.<br>
			Here's a brief overview of our offered services.</p>

		<div class="individual-services">
			<?php query_posts('post_type=services');?>
				<?php while ( have_posts() ): the_post();
				$image= get_field('image_illustration');
				$size= "thumbnail"; ?>

					<h4><?php the_title();?></h4>
						<?php the_content();?>
							<?php echo wp_get_attachment_image($image,$size);?>
			<?php endwhile;?>
			<?php wp_reset_query();?>
			</div>
		</div>

	</section>



<?php get_footer(); ?>
