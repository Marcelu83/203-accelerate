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
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

	<section class="company-services">
		<div class="site-content">
		<h3>Our Services</h3>
		<p>We take pride in our clients and the content we create for them.
			Here's a brief overview of our offered services.</p>

<?php get_footer(); ?>
