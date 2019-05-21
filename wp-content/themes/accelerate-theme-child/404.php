<?php
/**
 * The template for displaying the 404 error page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content-404" role="main">

      <header class="page-header-404">
  				<h1 class="page-title"><span class="custom-h1">Whoa!</span> What the heck happened<a href="#404errormessage" id="linktitle"> here?</a></h1>
  			</header>

  			<div class="page-wrapper" id="404errormessage">
  				<div class="page-content">
  					<h2><?php _e( 'Oooops, the page you are trying to visit does not exist. But you get to see a cute bunny pic!', 'twentythirteen' ); ?></h2>
  					<p><?php _e( 'Maybe try a search?', 'twentythirteen' ); ?></p>

  					<?php get_search_form(); ?>
						<br>
						<p>You can also find more information at the following links:</p>
							<ul>

						<li><a href="<?php echo get_permalink(47406);?>">About</a></li>
						<li><a href="<?php echo get_permalink(6);?>">Blog</a></li>
						<li><a href="<?php echo get_permalink(47362);?>">Contact</a></li>


  				</div><!-- .page-content -->

					<aside>
						<div class="image-404">
							<img src="<?php echo home_url(); ?>/wp-content/uploads/2019/05/rabbit_pc-Cropped.jpg">
						<div>
					</aside>

  			</div><!-- .page-wrapper -->

  	</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
