<?php
/*single- portion of the name tells WordPress that this is a
template file to display single posts of a certain type.
case_studies portion defines that posttype, which is a custom type post
*/

get_header(); ?>

	<div id="primary" class="site-content sidebar">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post();
			$services = get_field('services');
			$client = get_field('client');
			$sitelink = get_field('site_link');
			$image1 = get_field('image_1');
			$image2 = get_field('image_2');
			$image3 = get_field('image_3');
			$size= "full"; ?>

				<article class="case-study">
					<aside class="case-study-sidebar">
						<h2><?php the_title(); ?></h2>
							<h4><?php echo $services;?></h4>
							<h4>Client:<?php echo $client;?></h4>

								<?php the_content();?>

				<p class="read-more-link"><a href="<?php echo $site_link;?>">Visit Live Site</a></p>
				</aside>

				<div class="img-container">
				<div class="thumbnail">

					<?php if ($image1){
						echo wp_get_attachment_image($image1,$size);
					}?>

				</div>
				<div class="thumbnail">

					<?php if($image2){
						echo wp_get_attachment_image($image2,$size);
					}?>

				</div>

				<div class="thumbnail">

					<?php if($image3){
						echo wp_get_attachment_image($image3,$size);
					}?>

				</div>
				</div>
				</article>

			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

	</div><!-- #primary -->

<?php get_footer(); ?>
