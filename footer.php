<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>

	
	<footer class="">
		<div class="container">
			<div class="table-cell half">
				<div class="table">
					
					<div class="row">
						<div class="table-cell icon">
							<img  class="sun" src="<?php echo get_template_directory_uri(); ?>/assets/images/sun-back-to-top.gif" alt="">
						</div>
						<div class="about table-cell">
							<h1>summer fridays</h1>
							<?php the_field('about', 7) ?>
						</div>
					</div>
					<div class="row">
						<div class="table-cell icon">
							<img class="penny" src="<?php echo get_template_directory_uri(); ?>/assets/images/penny.png" alt="">
						</div>
						<div class="about table-cell">
							<h1>made by <a href="http://cobblehilldigital.com" target=_blank>cobble hill</a></h1>
						</div>
					</div>
				</div>
			</div>

			<div class="coming-soon table-cell half">
				<?php query_posts(array('posts_per_page' => 1, 'category_name' => 'coming-soon')) ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('content', 'preview'); ?>
				<?php endwhile; ?>
			</div>
		</div>
<!--
		<div class="utility">
			<span>&copy; 2015 Cobble Hill, All Rights Reserved</span>
			<span><a href="mailto:summerfridays@cobblehilldigital.com">summerfridays@cobblehilldigital.com</a></span>
		</div>
-->
	</footer>

	</div> <!-- ENDS BODY WRAPPER -->
	<?php wp_footer(); ?>

</body>
</html>